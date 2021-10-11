<?php

namespace App\Domain\Department\DataTransferObjects;

use Illuminate\Http\UploadedFile;

class CreateDepartmentDto
{
    public string $name;
    public UploadedFile $file;

    public function __construct(string $name, UploadedFile $file)
    {
      $this->name = $name;
      $this->file = $file;
    }
}

