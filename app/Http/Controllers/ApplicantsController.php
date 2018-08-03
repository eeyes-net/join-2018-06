<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Http\Requests\ApplicantRequest;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    public function index()
    {
        //TODO
    }

    public function show(Applicant $applicant)
    {
        //TODO
    }
    
    public function create()
    {
        return view('applicant.create');
    }

    public function store(ApplicantRequest $request)
    {
        $applicant = Applicant::create($request->all());
    }

    public function edit(Applicant $applicant)
    {
        //TODO
    }

    public function update(Applicant $applicant, ApplicantRequest $request)
    {
        //TODO
    }

    public function destroy(Applicant $applicant)
    {
        //TODO
    }
}
