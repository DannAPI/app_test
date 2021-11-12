<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController
{
    public function allUser()
    {
        $user = User::all();
        return view('users', ['user' => $user]);
    }

    public function addUser(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('users');
    }
    public function userId($id)
    {
        $user = User::find($id);
        return view('user_by_id', ['user' => $user, 'comment' => $user->comment]);
    }

}
