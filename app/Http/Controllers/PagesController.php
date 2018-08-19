<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * 返回主页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function root()
    {
        return view('pages.root');
    }

    /**
     * 返回后台页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin()
    {
        return view('pages.admin');
    }
}
