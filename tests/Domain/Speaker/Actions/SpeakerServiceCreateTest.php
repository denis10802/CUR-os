<?php

namespace Tests\Domain\Speaker\Actions;

use App\Domain\Department\Models\Department;
use App\Domain\Speaker\DataTransferObjects\CreateSpeakerDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class SpeakerServiceCreateTest extends TestCase
{
    use DatabaseMigrations;

    public function test_speaker_create()
    {
        // Arrange
        $firstName = 'Testing';
        $lastName = 'Speakers';
        $surname = 'New';
        $position = 'software engineer';
        $image = UploadedFile::fake()->create('imageTest.jpg', '200', 'image/png');
        $newsSlug = $firstName.'-'.$lastName;
        $slug = Str::of($newsSlug)->slug('-');
        $department = Department::factory()->create();
        $departmentId = $department->id;

        $dto = new CreateSpeakerDto(
            $firstName,
            $lastName,
            $surname,
            $position,
            $image,
            $slug,
            $departmentId,
        );

        $speaker = Speaker::query()->where('slug', $dto->slug)->exists();
        $this->assertFalse($speaker);

        // Act
        $speaker = new Speaker();
        $speaker->first_name = $dto->firstName;
        $speaker->last_name = $dto->lastName;
        $speaker->surname = $dto->surname;
        $speaker->position = $dto->position;
        $speaker->image_path = (string) Storage::put('/speakers', $dto->file);
        $speaker->slug = $dto->slug;
        $speaker->department_id = $dto->departmentId;
        $speaker->save();

        // Assert
        $this->assertModelExists($speaker);
        $this->assertDatabaseHas('speakers', [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'surname' => $surname,
            'position' => $position,
            'image_path' => 'speakers/'.$image->hashName(),
            'slug' => $dto->slug,
            'department_id' => $departmentId,
        ]);
    }
}
