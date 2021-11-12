<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;


class DepartmentController
{
    protected $departments;
    protected $id;


    public function allDepartment()
    {
        $departments = Department::all();
        return view('departments', ['department' => $departments]);

    }
    public function allDepartmentForIndex()
    {
        $departments = Department::all();
        return view('index', ['departments' => $departments]);
    }

    public function addDepartment(DepartmentRequest $request)
    {
        $departments = Department::create($request->all());
        return redirect()->route('all', [$departments]);
    }

    public function deleteDepartment($id)
    {
        $departments = Department::find($id);
        $departments->delete();
        return redirect()->route('all', [$departments]);
    }

}
