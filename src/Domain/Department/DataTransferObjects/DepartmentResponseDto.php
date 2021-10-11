<?php

namespace App\Domain\Department\DataTransferObjects;

class DepartmentResponseDto
{
    public string $name;
    public string $imagePath;

    public function __construct(string $name, string $imagePath)
    {
        $this->name = $name;
        $this->imagePath = $imagePath;
    }
}
