<?php

namespace Tests\App\Admin;

use App\Domain\SlideTypes\Actions\SlideTypeService;
use App\Domain\SlideTypes\Models\SlideType;
use App\Domain\User\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SlideTypeControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_index()
    {
        // Arrange
        $admin = User::factory()->admin()->create();
        SlideType::factory()->create([
            'image_path' => 'path/to/image.jpg',
            'fields_map' => [
                'name' => 'Название',
                'selectIconAtTheTop' => 'Выбрать иконку вверху',
            ],
        ]);

        // Act
        $slideTypesService = new SlideTypeService();
        $slideTypes = $slideTypesService->list();
        $response = $this->actingAs($admin)
            ->get(route('slide_type.index'));
        $view = $this->view('admin.slide_type.index', [
            'slideTypes' => $slideTypes,
        ]);

        // Assert
        $response->assertOk();
        $response->assertSee($slideTypes[0]->imagePath);
        $response->assertSee($slideTypes[0]->fieldsMap);
        $view->assertSee($slideTypes[0]->imagePath);
        $view->assertSeeInOrder($slideTypes[0]->fieldsMap);
    }
}
