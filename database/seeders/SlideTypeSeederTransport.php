<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideTypeSeederTransport extends Seeder
{
    public function run()
    {
        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/trans_01.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'numberOfIncidentsPerWeek' => 'Количество ДТП за неделю',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_02.jpg');
        $slide->field_maps_json = [
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
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_03.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'exitIntoTheOncomingLaneFromTheTopLeft' => 'Выезд на встречную полосу сверху слева',
            'exitIntoTheOncomingLaneFromTheTopRight' => 'Выезд на встречную полосу сверху справа',
            'exitIntoTheOncomingLaneFromTheBottomLeft' => 'Выезд на встречную полосу снизу слева',
            'exitIntoTheOncomingLaneFromTheBottomRight' => 'Выезд на встречную полосу снизу справа',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_04.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'theNumberOfRecordedCasesWithDrunkDrivers' => 'Количество зафиксированных случаев с водителями, находящимися в состоянии алкогольного опьянения',
            'ofWhichTheNumberOfAccidentsOnTheLeft' => 'Из них количество ДТП слева',
            'ofWhichTheNumberOfAccidentsOnTheRight' => 'Из них количество ДТП справа',
            'sinceTheBeginningOfTheYear' => 'С начала года',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_05.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'techniquesAreInvolvedOnTheRoadsOfTheRepublic' => 'На дорогах республики задействовано техники',
            'onRegionalRoads' => 'На дорогах регионального значения',
            'onFederalRoads' => 'На дорогах федерального значения',
            'onTheRoadsInTheCityOfUfa' => 'На дорогах в городе Уфа',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_06.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'image' => 'Изображение',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_07.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'image' => 'Изображение',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('transport/zkh_07-1.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'image' => 'Изображение',
        ];
        $slide->save();
    }
}
