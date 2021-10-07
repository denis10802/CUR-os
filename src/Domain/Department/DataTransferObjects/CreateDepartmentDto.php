<?php

namespace App\Domain\Department\DataTransferObjects;

class InputDepartmentDto
{
    public string $name;
    public string $image_path;

    public function __construct(string $name, string $image_path)
    {
      $this->name = $name;
      $this->image_path = $image_path;
    }

    public function get()
    {


    }
}

