<?php

namespace App\Domain\Speaker\DataTransferObjects;

class SpeakerResponseDto
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $surname,
        public string $position,
        public string $imagePath,
        public string $slug,
        public string $department,
    ) {
    }
}
