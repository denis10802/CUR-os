<?php

namespace Database\Factories;

use App\Domain\SlideTypes\Models\SlideType;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlideTypeFactory extends Factory
{
    protected $model = SlideType::class;

    public function definition()
    {
        return [
            'image_path' => $this->faker->image,
           'fields_map' => $this->faker->shuffleArray([
               'name' => 'Название',
               'operatingModeOfZKH' => 'Режим работы предприятий ЖКХ',
               'emergencySituations' => 'Аварийные ситуации',
           ]),
       ];
    }
}
