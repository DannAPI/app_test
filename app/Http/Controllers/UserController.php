<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends BController
{
    public function all_user()
    {
        $user = User::all();
        return view('users', ['user' => $user]);
    }

    public function add_user(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'phone_number' => 'required',
            'user_address' => 'required',
            'comment' => 'required',
            'email'=>'required|email',
            'department_id'=>'integer',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $user = User::create($input);
        return redirect()->route('users', [$user]);
    }
    public function user_by_id($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return $this->sendError('User not found.');
        }
        return view('user_by_id', ['user' => $user, 'comment' => $user->comment]);
    }

}
