<?php

namespace Tests\Feature;

use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DepartmentServiceTest extends TestCase
{
    use DatabaseMigrations;
    
    public function test_method_list_returns_an_object_dto()
    {
        // Arrange
        $dto = new DepartmentResponseDto('Retdvsaabb v vvhgu', 'hhdddd/dkks/ppqw.gps');
        Department::factory()->create([
            'name'=>'Retdvsaabb v vvhgu',
            'image_path'=>'hhdddd/dkks/ppqw.gps']);

        // Act
        $service = new DepartmentService();
        $testing_data = $service->list();

        // Assert
        $this->assertIsObject($testing_data);
        $this->assertSame($dto->name, $testing_data[0]->name);
        $this->assertSame($dto->image_path, $testing_data[0]->image_path);
    }

    public function  test_method_create_save_the_object_dto()
    {
        // Arrange
        $dto = new CreateDepartmentDto('new name','path/path/image.jpg');

        // Act
        $service = new DepartmentService();
        $store = $service->create($dto);

        // Assert
        $this->assertSame($store->name, $dto->name);
    }
}
