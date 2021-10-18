<?php

namespace Tests\App\Admin\Controllers;

use App\Domain\Department\Models\Department;
use App\Domain\User\Models\User;
use App\Domain\User\Models\UserDepartment;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_list_users_show()
    {
        // Arrange
        User::factory()
            ->has(UserDepartment::factory()
                ->for(Department::factory(), 'department'), 'department')
            ->create([
                'name' => 'Тестовый',
                'lastname' => 'User'
            ]);

        // Act
        $response = $this->get(route('user.index'));

        // Assert
        $response->assertOk();
        $response->assertSee('Тестовый User');
        $response->assertViewIs('admin.users.index');
    }

    public function test_form_create_user()
    {
        // Arrange
        $response = $this->post(route('user.store'), [
            'name' => 'Тестовый',
            'lastname' => 'Пользователь',
            'email' => 'example@email.com',
            'password' => '123e45678',
            'department' => 2,
        ]);

        // Act
        $createdModelExists = User::query()->whereRelation('department', 'department_id', 2)->exists();

        // Assert
        $response->assertValid();
        $response->assertRedirect(route('user.index'));
        $this->assertTrue($createdModelExists);
        $this->assertDatabaseCount('users', 1);
    }
}
