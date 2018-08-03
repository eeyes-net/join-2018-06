<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthenticateController extends LoginController
{

    /**
     * 通过CAS登陆
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login()
    {
        $eeyesClient = new Eeyes([
            'clientId'      => config('oauth.clientId'),
            'clientSecret'  => config('oauth.clientSecret'),
            'redirectUri'   => config('oauth.redirectUri'),
            'scope'	        => [
                'info-username.read',
                'info-name.read',
            ]
        ]);

        $query_user = $eeyesClient->getUser();
        $exist_user = User::where('username', $query_user->getUsername())->first();

        if (!$exist_user)
        {
            $user = User::create([
                'username' => $query_user->getUsername(),
                'name' => $query_user->getName(),
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::logout();
        Session::flush();
        Session::save();
        return redirect('https://account.eeyes.net/logout?url='.urlencode(url('/')));
    }
}
