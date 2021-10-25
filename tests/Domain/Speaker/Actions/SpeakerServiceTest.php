<?php

namespace Tests\Domain\Speaker\Actions;

use App\Domain\Speaker\DataTransferObjects\SpeakerResponseDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SpeakerServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function test_list()
    {
        // Arrange
        Speaker::factory()->count(2)->create();

        // Act
        $speakers = Speaker::with('department')
            ->get()
            ->map(function (Speaker $speaker) {
                return new SpeakerResponseDto(
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
        $this->assertCount(2, $speakers);
        $this->assertDatabaseCount('speakers', 2);
    }
}
