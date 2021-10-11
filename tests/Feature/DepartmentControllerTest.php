<?php

namespace Tests\Feature;

use App\Domain\Department\Models\Department;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DepartmentControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_list_show_departments()
    {
        // Arrange
        Department::factory()->create([
           'name'=>'Вот этот заголовок',
           'image_path'=> 'должен быть нв странице'
        ]);

        // Act
        $response = $this->get('/departments')->assertOk();

        // Assert
        $response->assertSee('Вот этот заголовок');
        $response->assertViewIs('admin.departments.index');
    }

    public function test_form_create_department()
    {
        // Arrange
        Storage::fake();
        $file = UploadedFile::fake()->create('image.png',100,'image/png');

        // Act
        $response = $this->post(route('departments.store'),[
            'name'=> 'Bvz cyurnw',
            'image'=> $file
            ]);
        $fieldExists = Department::query()->where('name','Bvz cyurnw')->exists();
        $fileExists = Storage::disk()->exists('departments/'.$file->hashName());

        // Assert
        $response->assertValid();
        $response->assertRedirect('/departments');
        $this->assertTrue($fieldExists);
        $this->assertTrue($fileExists);
    }
}
