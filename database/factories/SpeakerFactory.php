<?php

namespace Database\Factories;

use App\Domain\Department\Models\Department;
use App\Domain\Speaker\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeakerFactory extends Factory
{
    protected $model = Speaker::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'surname' => $this->faker->firstNameFemale,
            'position' => $this->faker->jobTitle,
            'image_path' => $this->faker->image,
            'slug' => $this->faker->slug,
            'department_id' => Department::factory(),
        ];
    }
}
