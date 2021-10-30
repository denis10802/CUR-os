<?php

namespace App\Domain\SlideTypes\Actions;

use App\Domain\SlideTypes\DataTransferObjects\SlideTypeResponseDto;
use App\Domain\SlideTypes\Models\SlideType;

final class SlideTypeService
{
    public function list(): \Illuminate\Support\Collection
    {
        return SlideType::all()->map(function (SlideType $slideType) {
            return new SlideTypeResponseDto(
                $slideType->image_path,
                $slideType->fields_map
            );
        });
    }
}
