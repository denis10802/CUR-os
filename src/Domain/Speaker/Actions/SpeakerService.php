<?php

namespace App\Domain\Speaker\Actions;

use App\Domain\Speaker\DataTransferObjects\SpeakerCreateDto;
use App\Domain\Speaker\DataTransferObjects\SpeakerResponseDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Support\Facades\Storage;

class SpeakerService
{
    public function list(): \Illuminate\Support\Collection
    {
        return Speaker::with('department')
            ->get()
            ->map(function (Speaker $speaker) {
                return new SpeakerResponseDto(
                    $speaker->first_name,
                    $speaker->last_name,
                    $speaker->surname,
                    $speaker->position,
                    $speaker->image_path,
                    $speaker->slug,
                    $speaker->department->name,
            );
            });
    }

    public function create(SpeakerCreateDto $speakerDto): Speaker
    {
        $speaker = new Speaker();

        $speaker->first_name = $speakerDto->firstName;
        $speaker->last_name = $speakerDto->lastName;
        $speaker->surname = $speakerDto->surname;
        $speaker->position = $speakerDto->position;
        $speaker->image_path = (string) Storage::put('/speakers', $speakerDto->file);
        $speaker->slug = $speakerDto->slug;
        $speaker->department_id = $speakerDto->departmentId;

        $speaker->save();

        return $speaker;
    }
}
