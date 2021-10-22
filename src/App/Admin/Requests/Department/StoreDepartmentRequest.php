<?php

namespace App\App\Admin\Requests\Department;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'min:5'],
            'image' => ['required', 'image', 'max:20000'],
        ];
    }
}
