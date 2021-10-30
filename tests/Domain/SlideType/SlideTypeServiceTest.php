<?php

namespace Tests\Domain\SlideType;

use App\Domain\SlideTypes\DataTransferObjects\SlideTypeResponseDto;
use App\Domain\SlideTypes\Models\SlideType;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SlideTypeServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function test_list()
    {
        // Arrange
        SlideType::factory()->create();

        // Act
        $slides = SlideType::all()->map(function (SlideType $slideType) {
            return new SlideTypeResponseDto(
              $slideType->image_path,
              $slideType->fields_map
          );
        });

        // Assert
        $this->assertInstanceOf(SlideTypeResponseDto::class, $slides[0]);
    }
}
