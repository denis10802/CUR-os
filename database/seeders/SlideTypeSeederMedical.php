<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideTypeSeederMedical extends Seeder
{
    public function run()
    {
        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_01.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'CoronavirusInfectionCasesRegistered' => 'Зарегистрировано случаев короновирусной инфекции',
            'GrowthRate' => 'Темп прироста (Индекс)',
            'overThePastDay' => 'за прошедшие сутки',
            'duringTheWeek' => 'за неделю',
            'MorbidityRatePer100ThousandPopulation' => 'Уровень заболеваемости на 100 тыс. населения',
        ];
        $slide->save();

    }
}
