<?php

namespace Tests\Domain\User\Actions;

use App\Domain\Department\Models\Department;
use App\Domain\User\Actions\UserService;
use App\Domain\User\DataTransferObjects\CreateUserDto;
use App\Domain\User\DataTransferObjects\UserResponseDto;
use App\Domain\User\Models\User;
use App\Domain\User\Models\UserDepartment;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use DatabaseMigrations;

    private object $service;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var UserService $service */
        $this->service = $this->app->get(UserService::class);
    }

    public function test_user_list()
    {
        // Arrange
        User::factory()
            ->has(UserDepartment::factory()
                ->for(Department::factory()->create(['name' => 'Тестовая отрасль']), 'department'),
                'department')
            ->create([
                'first_name' => 'Тестовый',
                'last_name' => 'Пользователь',
                'email' => 'example@mail.ru',
            ]);

        // Act
        $users = $this->service->list();

        // Assert
        $this->assertInstanceOf(UserResponseDto::class, $users[0]);
        $this->assertSame('Тестовый', $users[0]->firstName);
        $this->assertSame('Пользователь', $users[0]->lastName);
        $this->assertSame('example@mail.ru', $users[0]->email);
    }

    public function test_user_create()
    {
        // Arrange
        $department = Department::factory()->create();
        $userCreateDto = new CreateUserDto(
            'Тестовый',
            'Пользователь',
            'example@mail.ru',
            'asdpke44009df',
            $department->id
        );

        // Act
        $user = $this->service->create($userCreateDto);

        // Assert
        $this->assertSame((int) $user->department->department_id, $department->id);
        $this->assertSame('example@mail.ru', $user->email);
        $this->assertSame('Тестовый', $user->first_name);
        $this->assertSame('Пользователь', $user->last_name);
    }

    public function test_validate_exception()
    {
        // Arrange
        User::factory()->create([
            'first_name' => 'Тестовый',
            'last_name' => 'Пользователь',
            'email' => 'test@email.com',
        ]);
        $user = User::firstOr();

        // Act
        $response = $this->post(route('user.store'), [
            'firstName' => 'Новый',
            'lastName' => 'User',
            'email' => 'test@email.com',
            'password' => '123e45678',
            'departmentId' => 1,
        ]);

        // Assert
        $this->assertSame('test@email.com', $user->email);
        $this->assertSame('Тестовый', $user->first_name);
        $response->assertSessionHasErrors([
            'email' => 'The email has already been taken.',
        ]);
    }
}
