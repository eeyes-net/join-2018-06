<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Department;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',[
            'only' => ['admin']
        ]);
    }

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
        $applicants = Applicant::paginate(20);
        $departments = Department::all()->sortByDesc('applicants_count');
        return view('pages.admin',compact('applicants','departments'));
    }
}
