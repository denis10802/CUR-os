<?php

namespace App\App\Admin\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:15'],
            'lastname' => ['required', ' min:3', 'max:15'],
            'email' => ['required', 'email:filter', 'unique:users,email'],
            'password' => ['required', 'min:8', Password::min(8)->letters()],
            'department' => ['required', 'unique:user_departments,department_id']
        ];
    }

}
