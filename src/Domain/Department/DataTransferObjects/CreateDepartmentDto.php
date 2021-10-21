<?php

namespace App\Domain\Department\DataTransferObjects;

use Illuminate\Http\UploadedFile;

class CreateDepartmentDto
{
    public function __construct(
        public string       $name,
        public UploadedFile $file
    )
    {
    }
}

