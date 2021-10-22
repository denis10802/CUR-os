<?php

namespace App\Domain\User\DataTransferObjects;

class CreateUserDto
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $password,
        public int $departmentId
    ) {
    }
}
