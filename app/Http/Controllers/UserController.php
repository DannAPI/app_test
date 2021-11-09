<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BController;
use App\Http\Resources\UserResource;
use App\Models\Comment;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class UserController extends BController
{
    public function all_user()
    {
        $user = User::all();
        return UserResource::collection($user);
    }

    public function add_user(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'phone_number' => 'required',
            'user_address' => 'required',
            'email'=>'required|email',
            'department_id'=>'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $user = User::create($input);

        return $this->sendResponse($user->toArray(), 'User created successfully.');
    }
    public function user_by_id($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return $this->sendError('User not found.');
        }
        return new UserResource($user);
    }

}
