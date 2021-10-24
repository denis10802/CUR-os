<?php

namespace App\Domain\Speaker\Actions;

use App\Domain\Speaker\DataTransferObjects\CreateSpeakerDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Support\Facades\Storage;

class SpeakerService
{
    public function create(CreateSpeakerDto $speakerDto): Speaker
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
