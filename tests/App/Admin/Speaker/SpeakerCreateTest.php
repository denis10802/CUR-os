<?php

namespace Tests\App\Admin;

use App\Domain\Department\Models\Department;
use App\Domain\Speaker\Actions\SpeakerService;
use App\Domain\Speaker\DataTransferObjects\SpeakerCreateDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class SpeakerCreateTest extends TestCase
{
    use DatabaseMigrations;

    public function test_send_request_to_create_speaker()
    {
        // Arrange
        $firstName = 'Testing';
        $lastName = 'Speakers';
        $surname = 'New';
        $position = 'software engineer';
        $image = UploadedFile::fake()->create('imageTest.jpeg', '2000', 'image/jpeg');
        $department = Department::factory()->create();
        $departmentId = $department->id;

        // Act
        $response = $this->post(route('speakers.store'), [
             'firstName' => $firstName,
             'lastName' => $lastName,
             'surname' => $surname,
             'position' => $position,
             'image' => $image,
             'departmentId' => $departmentId,
         ]);

        // Assert
        $response->assertValid();
        $response->assertRedirect(route('speakers.index'));
    }

    public function test_store()
    {
        // Arrange
        Storage::fake('speakers');

        $firstName = 'Testing';
        $lastName = 'Speakers';
        $surname = 'New';
        $position = 'software engineer';
        $image = UploadedFile::fake()->create('imageTest.jpg', '200', 'image/png');
        $newsSlug = $firstName . '-' . $lastName;
        $slug = Str::of($newsSlug)->slug('-');
        $department = Department::factory()->create();
        $departmentId = $department->id;

        $service = new SpeakerService();

        // Act
        $dto = new SpeakerCreateDto(
            $firstName,
            $lastName,
            $surname,
            $position,
            $image,
            $slug,
            $departmentId,
        );
        $speaker = $service->create($dto);

        // Assert
        $this->assertModelExists($speaker);
        $this->assertInstanceOf(Speaker::class, $speaker);
        $this->assertFileExists($image);
        Storage::assertExists('speakers/' . $image->hashName());
        $this->assertDatabaseHas('speakers', [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'surname' => $surname,
            'position' => $position,
            'image_path' => 'speakers/' . $image->hashName(),
            'slug' => $slug,
            'department_id' => $departmentId,
        ]);
    }
}
