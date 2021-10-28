<?php

namespace Tests\Domain\Speaker\Actions;

use App\Domain\Speaker\DataTransferObjects\SpeakerResponseDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SpeakerServiceTest extends TestCase
{
    use DatabaseMigrations;

    private int $speakerId;

    protected function setUp(): void
    {
        parent::setUp();
        Speaker::factory()->count(2)->create();
        $this->speakerId = 10;

        $image = UploadedFile::fake()->create('image.jpg', '500', 'image/jpg');

        Speaker::factory()->create([
            'id' => $this->speakerId,
            'image_path' => Storage::put('/speakers', $image),
        ]);

        $this->assertCount(3, Speaker::all());
    }

    public function test_list()
    {
        // Act
        $speakers = Speaker::with('department')
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
                    $speaker->department_id
           );
            });

        // Assert
        $this->assertInstanceOf(SpeakerResponseDto::class, $speakers[0]);
        $this->assertCount(3, $speakers);
        $this->assertDatabaseCount('speakers', 3);
    }

    public function test_get_by_id()
    {
        // Act
        $speaker = Speaker::query()->where('id', $this->speakerId)
            ->with('department')
            ->first();

        //Assert
        $this->assertSame($this->speakerId, $speaker->id);
    }
}
