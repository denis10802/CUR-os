<?php

namespace Tests\Domain\Speaker\Actions;

use App\Domain\Department\Models\Department;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Tests\TestCase;

class SpeakerServiceCreateAndUpdateTest extends TestCase
{
    use DatabaseMigrations;

    private string $firstName;
    private string $lastName;
    private string $surname;
    private string $position;
    private UploadedFile $image;
    private Stringable $slug;
    private string $departmentId;
    private int $speakerId;

    protected function setUp(): void
    {
        parent::setUp();

        $this->firstName = 'Testing';
        $this->lastName = 'Speakers';
        $this->surname = 'New';
        $this->position = 'software engineer';
        $this->image = UploadedFile::fake()->create('imageTest.jpg', '200', 'image/png');
        $newsSlug = $this->firstName . '-' . $this->lastName;
        $this->slug = Str::of($newsSlug)->slug('-');
        $department = Department::factory()->create();
        $this->departmentId = $department->id;
        $this->speakerId = 10;

        Speaker::factory()->create([
            'id' => $this->speakerId,
            'image_path' => Storage::put('/speakers', $this->image),
        ]);
    }

    public function test_create()
    {
        // Arrange
        $speaker = Speaker::query()->where('slug', $this->slug)->exists();
        $this->assertFalse($speaker);

        // Act
        $speaker = new Speaker();
        $speaker->first_name = $this->firstName;
        $speaker->last_name = $this->lastName;
        $speaker->surname = $this->surname;
        $speaker->position = $this->position;
        $speaker->image_path = (string) Storage::put('/speakers', $this->image);
        $speaker->slug = $this->slug;
        $speaker->department_id = (int) $this->departmentId;
        $speaker->save();

        // Assert
        $this->assertModelExists($speaker);
        $this->assertDatabaseHas('speakers', [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'surname' => $this->surname,
            'position' => $this->position,
            'image_path' => 'speakers/' . $this->image->hashName(),
            'slug' => $this->slug,
            'department_id' => $this->departmentId,
        ]);
    }

    public function test_update()
    {
        // Arrange
        Storage::fake('speakers');

        $speaker = Speaker::query()->where('id', $this->speakerId)
            ->with('department')->first();

        Storage::assertExists($speaker->image_path);
        Storage::delete($speaker->image_path);
        Storage::assertMissing($speaker->image_path);

        // Act
        $speaker->first_name = $this->firstName;
        $speaker->last_name = $this->lastName;
        $speaker->surname = $this->surname;
        $speaker->position = $this->position;
        $speaker->image_path = (string) Storage::put('/speakers', $this->image);
        $speaker->slug = $this->slug;
        $speaker->department_id = $this->departmentId;

        $speakerUpdated = $speaker->save();

        // Assert
        $this->assertTrue($speakerUpdated);
        $this->assertSame($this->firstName, $speaker->first_name);
        $this->assertSame($this->lastName, $speaker->last_name);
        $this->assertSame($this->surname, $speaker->surname);
        $this->assertSame($this->position, $speaker->position);
        $this->assertSame('speakers/' . $this->image->hashName(), $speaker->image_path);
        $this->assertSame($this->slug, $speaker->slug);
        $this->assertSame($this->departmentId, $speaker->department_id);
    }
}
