<?php

namespace App\Domain\User\DataTransferObjects;

class UserResponseDto
{
    public function __construct(
        public string $name,
        public string $lastname,
        public string $email,
        public string $department
    )
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->department = $department;
    }

}
