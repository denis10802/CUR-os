<?php

namespace Database\Factories;

use App\Domain\Department\Models\Department;
use App\Domain\User\Models\User;
use App\Domain\User\Models\UserDepartment;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDepartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'department_id' => Department::factory(),
        ];
    }
}
