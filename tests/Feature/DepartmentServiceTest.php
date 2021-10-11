<?php

namespace Tests\Feature;

use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DepartmentServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function test_department_list()
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
        $this->assertSame($dto->imagePath, $testing_data[0]->imagePath);
    }

    public function  test_department_create()
    {
        // Arrange
        $file = UploadedFile::fake()->create('image',100,'image/png');
        $dto = new CreateDepartmentDto('new name', $file);

        // Act
        $service = new DepartmentService();
        $store = $service->create($dto);
        $db = Department::all();

        // Assert
        $this->assertSame($store->name, $dto->name);
        $this->assertCount(1, $db);
    }
}
