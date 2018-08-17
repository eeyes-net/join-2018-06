<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin',[
            'except' => ['index','show']
        ]);
    }

    public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }

    public function show(Department $department, Request $request)
    {
        if ($department->name != $request->name)
        {
            return redirect($department->link,301);
        }

        return view('department.show', compact('department'));
    }

    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $department = Department::create($request->all());
        return route('department.show',[$department]);
    }

    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }

    public function update(Department $department, Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $department->update($request->all());
        return route('department.show',[$department]);
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success','成功删除！');
    }
}
