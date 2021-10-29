<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideType;
use Illuminate\Database\Seeder;

class SlideTypeSeederTransport extends Seeder
{
    public function run()
    {
        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_01.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'numberOfIncidentsPerWeek' => 'Количество ДТП за неделю',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_02.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'numberOfAccidentsSinceTheBeginningOfTheYear' => 'Количество ДТП с начала года',
            'theNumberOfVictimsSinceTheBeginningOfTheYearFromAbove' => 'Количество пострадавших с начала года сверху',
            'theNumberOfVictimsSinceTheBeginningOfTheYearOnTheLeft' => 'Количество пострадавших с начала года слева',
            'theNumberOfVictimsSinceTheBeginningOfTheYearOnTheRight' => 'Количество пострадавших с начала года справа',
            'theNumberOfDeathsSinceTheBeginningOfTheYearFromAbove' => 'Количество погибших с начала года сверху',
            'deathTollSinceTheBeginningOfTheYearLeft' => 'Количество погибших с начала года слева',
            'deathTollSinceTheBeginningOfTheYearRight' => 'Количество погибших с начала года  справа',
            'comparedToDataForTheSamePeriodLastYearOnTheLeft' => 'По сравнению с данными на аналогичный период прошлого года слева',
            'comparedToDataForTheSamePeriodLastYearOnTheRight' => 'По сравнению с данными на аналогичный период прошлого года справа',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_03.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'exitIntoTheOncomingLaneFromTheTopLeft' => 'Выезд на встречную полосу сверху слева',
            'exitIntoTheOncomingLaneFromTheTopRight' => 'Выезд на встречную полосу сверху справа',
            'exitIntoTheOncomingLaneFromTheBottomLeft' => 'Выезд на встречную полосу снизу слева',
            'exitIntoTheOncomingLaneFromTheBottomRight' => 'Выезд на встречную полосу снизу справа',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_04.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'theNumberOfRecordedCasesWithDrunkDrivers' => 'Количество зафиксированных случаев с водителями, находящимися в состоянии алкогольного опьянения',
            'ofWhichTheNumberOfAccidentsOnTheLeft' => 'Из них количество ДТП слева',
            'ofWhichTheNumberOfAccidentsOnTheRight' => 'Из них количество ДТП справа',
            'sinceTheBeginningOfTheYear' => 'С начала года',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_05.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'techniquesAreInvolvedOnTheRoadsOfTheRepublic' => 'На дорогах республики задействовано техники',
            'onRegionalRoads' => 'На дорогах регионального значения',
            'onFederalRoads' => 'На дорогах федерального значения',
            'onTheRoadsInTheCityOfUfa' => 'На дорогах в городе Уфа',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_06.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_07.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = 'transport/trans_07-1.jpg';
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'images' => 'Изображения',
        ];
        $slideType->save();
    }
}
