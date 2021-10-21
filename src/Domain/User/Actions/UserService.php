<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DataTransferObjects\CreateUserDto;
use App\Domain\User\DataTransferObjects\UserResponseDto;
use App\Domain\User\Models\User;
use App\Domain\User\Models\UserDepartment;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function list(): \Illuminate\Database\Eloquent\Collection|array|\Illuminate\Support\Collection
    {
        return User::with('department.department')->get()
            ->map(function (User $user) {
                return new UserResponseDto(
                    $user->first_name,
                    $user->last_name,
                    $user->email,
                    $user->department->department->name
                );
            });
    }

    public function create(CreateUserDto $userDto): User
    {

        $user = new User();
        $user->first_name = $dto->firstName;
        $user->last_name = $dto->lastName;
        $user->email = $dto->email;
        $user->password = Hash::make($dto->password);
        $user->save();

        $userDepartment = new UserDepartment();
        $userDepartment->department_id = $dto->departmentId;
        $user->department()->save($userDepartment);

        return $user;
    }
}
