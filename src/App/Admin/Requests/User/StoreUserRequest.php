<?php

namespace App\App\Admin\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'firstName' => ['required', 'min:3', 'max:15'],
            'lastName' => ['required', ' min:3', 'max:15'],
            'email' => ['required', 'email:filter'],
            'password' => ['required', Password::min(8)->letters()],
            'departmentId' => ['required'],
        ];
    }
}
