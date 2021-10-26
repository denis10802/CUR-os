<?php

namespace Tests\App\Admin;

use App\Domain\Speaker\Actions\SpeakerService;
use App\Domain\Speaker\DataTransferObjects\SpeakerResponseDto;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SpeakerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_list()
    {
        // Arrange
        Speaker::factory()->count(3)->create();
        $response = $this->get(route('speakers.index'));

        // Act
        $service = new SpeakerService();
        $speakers = $service->list();
        $view = $this->view('admin.speakers.index', [
            'speakers' => $speakers,
        ]);

        // Assert
        $response->assertOk();
        $this->assertInstanceOf(SpeakerResponseDto::class, $speakers[0]);
        $response->assertSee($speakers[0]->firstName);
        $response->assertViewIs('admin.speakers.index');
        $view->assertSee($speakers[0]->firstName);
    }
}
