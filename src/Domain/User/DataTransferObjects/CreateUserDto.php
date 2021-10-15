<?php

namespace App\Domain\User\DataTransferObjects;

class CreateUserDto
{
    public function __construct(
        public string $name,
        public string $lastname,
        public string $email,
        public string $password,
        public string $department
    )
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->department = $department;
    }
}
