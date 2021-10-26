<?php

namespace App\Domain\Speaker\Actions;

use App\Domain\Speaker\DataTransferObjects\SpeakerCreateDto;
use App\Domain\Speaker\DataTransferObjects\SpeakerResponseDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class SpeakerService
{
    public function list(): Collection
    {
        return Speaker::with('department')
            ->get()
            ->map(function (Speaker $speaker) {
                return new SpeakerResponseDto(
                    $speaker->id,
                    $speaker->first_name,
                    $speaker->last_name,
                    $speaker->surname,
                    $speaker->position,
                    $speaker->image_path,
                    $speaker->slug,
                    $speaker->department->name,
                    $speaker->department_id,
                );
            });
    }

    public function create(SpeakerCreateDto $speakerDto): Speaker
    {
        $speaker = new Speaker();

        $this->saveSpeaker($speakerDto, $speaker);

        return $speaker;
    }

    public function getSpeakerById($id): SpeakerResponseDto
    {
        $speaker = Speaker::query()
            ->where('id', $id)
            ->with('department')->first();

        return new SpeakerResponseDto(
            $speaker->id,
            $speaker->first_name,
            $speaker->last_name,
            $speaker->surname,
            $speaker->position,
            $speaker->image_path,
            $speaker->slug,
            $speaker->department->name,
            $speaker->department_id,
        );
    }

    public function update(
        $id,
        SpeakerCreateDto $dto
    ): Speaker|null {
        $speaker = Speaker::query()
            ->where('id', $id)
            ->with('department')->first();

        Storage::delete($speaker->image_path);

        $this->saveSpeaker($dto, $speaker);

        return $speaker;
    }

    private function saveSpeaker(SpeakerCreateDto $dto, Speaker $speaker): void
    {
        $speaker->first_name = $dto->firstName;
        $speaker->last_name = $dto->lastName;
        $speaker->surname = $dto->surname;
        $speaker->position = $dto->position;
        $speaker->image_path = (string) Storage::put('/speakers', $dto->file);
        $speaker->slug = $dto->slug;
        $speaker->department_id = $dto->departmentId;

        $speaker->save();
    }
}
