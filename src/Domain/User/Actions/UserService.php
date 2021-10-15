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
        return User::all()->map(function (User $user) {
            return new UserResponseDto(
                $user->name,
                $user->lastname,
                $user->email,
                $user->department->department->name
            );
        });
    }

    public function create(CreateUserDto $userDto): User
    {
        $user = new User();
        $userDepartment = new UserDepartment();

        $user->name = $userDto->name;
        $user->lastname = $userDto->lastname;
        $user->email = $userDto->email;
        $user->password = Hash::make($userDto->password);
        $userDepartment->department_id = $userDto->department;
        $user->save();
        $user->department()->save($userDepartment);

        return $user;
    }
}
