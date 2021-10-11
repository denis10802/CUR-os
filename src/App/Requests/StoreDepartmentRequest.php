<?php

namespace App\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:5',
            'image'=> 'required|mimes:jpeg,jpg,png,gif|max:20000'
        ];
    }
}
