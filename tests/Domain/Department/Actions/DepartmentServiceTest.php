<?php

namespace Tests\Domain\Department\Actions;

use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\Models\Department;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class DepartmentServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function test_department_list()
    {
        // Arrange
        $dto = new DepartmentResponseDto('Retdvsaabb v vvhgu', 'hhdddd/dkks/ppqw.gps', 1);
        Department::factory()->create([
            'name' => 'Retdvsaabb v vvhgu',
            'image_path' => 'hhdddd/dkks/ppqw.gps', ]);

        // Act
        $service = new DepartmentService();
        $testingData = $service->list();

        // Assert
        $this->assertIsObject($testingData);
        $this->assertSame($dto->name, $testingData[0]->name);
        $this->assertSame($dto->imagePath, $testingData[0]->imagePath);
    }

    public function test_department_create()
    {
        // Arrange
        $file = UploadedFile::fake()->create('image', 100, 'image/png');
        $departmentCreatDto = new CreateDepartmentDto('new name', $file);

        // Act
        $service = new DepartmentService();
        $department = $service->create($departmentCreatDto);

        // Assert
        $this->assertModelExists($department);
        $this->assertSame($department->name, $departmentCreatDto->name);
    }
}
