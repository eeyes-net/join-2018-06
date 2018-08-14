<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use sxxuz\OAuth2\Client\Provider\EeyesProvider;

class AuthenticateController extends LoginController
{

    /**
     * 通过CAS登陆
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $eeyesClient = new EeyesProvider([
            'clientId'      => config('oauth.clientId'),
            'clientSecret'  => config('oauth.clientSecret'),
            'redirectUri'   => config('oauth.redirectUri'),
            'scope'	        => [
                'info-username.read',
                'info-name.read',
                'info-detail.read',
            ]
        ]);

        $query_user = $eeyesClient->getUser();
        $exist_user = User::where('username', $query_user->getUsername())->first();

        if (!$exist_user)
        {
            $user = User::create([
                'username' => $query_user->getUsername(),
                'name' => $query_user->getName(),
                'birthday' => $query_user->getBirthday(),
                'gender' => $query_user->getGender(),
                'password' => bcrypt("default_password"),
            ]);
        } else {
            $user = $exist_user;
        }

        Auth::login($user);
        session()->flash('success','登陆成功');
        return redirect()->intended('/');
    }

    /**
     * 登出并重定向到CAS登出
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        Session::save();
        return redirect('https://account.eeyes.net/logout?url='.urlencode(url('/')));
    }
}
