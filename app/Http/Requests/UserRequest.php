<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone_number' => 'required|string|digits_between:10,13',
            'user_address' => 'required|string',
            'comment' => 'required|string',
            'email' => 'required|string|email|max:30|unique:users',
            'department_id'=>'integer',
        ];
    }
}
