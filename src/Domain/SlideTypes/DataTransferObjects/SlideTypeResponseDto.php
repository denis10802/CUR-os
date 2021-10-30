<?php

namespace App\Domain\SlideTypes\DataTransferObjects;

final class SlideTypeResponseDto
{
    public function __construct(
        public string $imagePath,
        public array $fieldsMap,
    ) {
    }
}
