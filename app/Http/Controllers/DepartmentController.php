<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends BController
{
    protected $department;
    protected $id;

    public function all_department()
    {
        $department = Department::all();
        return view('departments', ['department' => $department]);
    }

    public function add_department(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $department = Department::create($input);
        return redirect()->route('all', [$department]);
    }

    public function delete_department($id)
    {
        $department = Department::find($id);
        if ($department) {
            $department->delete();
        } else return $this->sendError('Department for deleted not found');
        return redirect()->route('all', [$department]);
    }

}
