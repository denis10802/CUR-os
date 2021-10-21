<?php

namespace App\Domain\Department\DataTransferObjects;

class DepartmentResponseDto
{
    public function __construct(
        public string $name,
        public string $imagePath,
        public string $id,
    )
    {
    }
}
