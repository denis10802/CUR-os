<?php

namespace App\Domain\Speaker\DataTransferObjects;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Stringable;

class CreateSpeakerDto
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $surname,
        public string $position,
        public UploadedFile $file,
        public Stringable $slug,
        public int $departmentId,
    ) {
    }
}
