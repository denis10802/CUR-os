<?php

namespace Tests\App\Admin;

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
                'first_name' => 'Тестовый',
                'last_name' => 'User',
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
        $department = Department::factory()->create();

        // Act
        $response = $this->post(route('user.store'), [
            'firstName' => 'Тестовый',
            'lastName' => 'Пользователь',
            'email' => 'defe@email.com',
            'password' => '123e45678',
            'departmentId' => $department->id,
        ]);
        $createdModelExists = User::query()->whereRelation('department', 'department_id', $department->id)->exists();
        $user = User::firstOr();

        // Assert
        $response->assertValid();
        $response->assertRedirect(route('user.index'));
        $this->assertTrue($createdModelExists);
        $this->assertSame($user->email, 'defe@email.com');
        $this->assertSame($user->first_name, 'Тестовый');
        $this->assertSame($user->last_name, 'Пользователь');
        $this->assertSame((int) $user->department->department_id, $department->id);
    }
}
