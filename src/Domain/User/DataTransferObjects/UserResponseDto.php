<?php

namespace App\Domain\User\DataTransferObjects;

class UserResponseDto
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $departmentName
    ) {
    }
}
