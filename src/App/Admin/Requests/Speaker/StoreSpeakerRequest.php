<?php

namespace App\App\Admin\Requests\Speaker;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpeakerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'firstName' => ['required', 'min:3'],
            'lastName' => ['required', 'min:3'],
            'surname' => ['required', 'min:3'],
            'position' => ['required', 'min:3'],
            'image' => ['required', 'image', 'max:20000'],
            'departmentId' => ['required'],
        ];
    }
}
