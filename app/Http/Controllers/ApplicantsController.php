<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Http\Requests\ApplicantRequest;
use App\Models\Department;

class ApplicantsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $applicants = Applicant::paginate(20);
        return view('applicant.index', compact('applicants'));
    }

    /**
     * @param Applicant $applicant
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Applicant $applicant)
    {
        return view('applicant.show', compact('applicant'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $departments = Department::all();
        return view('applicant.create', compact('departments'));
    }

    /**
     * @param ApplicantRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ApplicantRequest $request)
    {
        Applicant::create($request->all());
        return redirect()->route('root')->with('success', '提交成功！');
    }
}