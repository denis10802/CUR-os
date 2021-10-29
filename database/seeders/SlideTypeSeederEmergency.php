<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideTypeSeederEmergency extends Seeder
{
    public function run()
    {
        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_01.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'numberOfFiresPerWeek' => 'Количество пожаров за неделю',
            'numberOfFiresSinceTheBeginningOfTheYear' => 'Количество пожаров с начала года',
            'comparedToDataForTheSamePeriodLastYearOnTheLeft' => 'по сравнению с данными на аналогичный период прошлого года слева',
            'comparedToDataForTheSamePeriodLastYearOnTheRight' => 'по сравнению с данными на аналогичный период прошлого года справа',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_02.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'numberOfFatalitiesInFiresPerWeekAbove' => 'Количество погибших в пожарах за неделю вверху',
            'numberOfFatalitiesInFiresPerWeekInTheMiddle' => 'Количество погибших в пожарах за неделю в середине',
            'numberOfFatalitiesInFiresInAweekBottomLeftSide' => 'Количество погибших в пожарах за неделю внизу с левой стороны',
            'numberOfFatalitiesInFiresInAweekBottomRightSide' => 'Количество погибших в пожарах за неделю внизу с правой стороны',
            'numberOfPeopleIOInjuredInFiresPerWeekAbove' => 'Количество травмированных в пожарах за неделю вверху',
            'numberOfPeopleIOInjuredInFiresPerWeekInTheMiddle' => 'Количество травмированных в пожарах за неделю в середине',
            'numberOfPeopleIOInjuredInFiresInAweekAtTheBottomLeftSide' => 'Количество травмированных в пожарах за неделю внизу с левой стороны',
            'numberOfPeopleIOInjuredInFiresInAWeekAtTheBottom on theRightSide' => 'Количество травмированных в пожарах за неделю внизу с правой стороны',
            'numberOfPeopleRescuedInFiresPerWeek above' => 'Количество спасенных в пожарах за неделю вверху',
            'numberOfPeopleRescuedByFiresInTheMiddleOfTheWeek' => 'Количество спасенных в пожарах за неделю в середине',
            'numberOfPeopleRescuedInFiresInAweekBottomLeftSide' => 'Количество спасенных в пожарах за неделю внизу с левой стороны',
            'numberOfPeopleRescuedInFiresInAweekBottomRightSide' => 'Количество спасенных в пожарах за неделю внизу с правой стороны',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_04.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'theNumberOfMunicipalitiesWhereTheEmergencyOccurred' => 'Количество муниципальных образований, где произошло ЧС',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_05.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'numberOfPreventiveRaidsPerWeek' => 'Количество профилактических рейдов за неделю',
            'theNumberOfCitizensFromRiskGroupsTakenForSupervision' => 'Количество граждан из групп риска, взятых на кураторство',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_08.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'rescuedPerson ' => 'Спасено человек с 2016 год',
            'childrenSaved' => 'Спасено детей с 2016 года',
            'aWeekLeft' => 'за неделю слева',
            'aWeekRight' => 'за неделю справа',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_09.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'deathTollAtTheTop' => 'Количество погибших вверху',
            'theDeathTollInTheMiddle' => 'Количество погибших в середине',
            'theDeathTollBottomLeftSide' => 'Количество погибших внизу с левой стороны',
            'theDeathTollBottomRightSide' => 'Количество погибших внизу с правой стороны',
            'numberOfVictimsTheTop' => 'Количество пострадавших вверху',
            'numberOfVictimsTheMiddle' => 'Количество пострадавших в середине',
            'numberOfVictimsAtTheBottomTheLeftSide' => 'Количество пострадавших внизу с левой стороны',
            'numberOfVictimsAtTheBottomTheRightSide' => 'Количество пострадавших внизу с правой стороны',
            'numberOfIncidentsAtTheTop' => 'Количество проишествий вверху',
            'numberOfIncidentsInTheMiddle' => 'Количество проишествий в середине',
            'numberOfIncidentsBottomLeftSide' => 'Количество проишествий внизу с левой стороны',
            'numberOfIncidentsBottomRightSide' => 'Количество проишествий внизу с правой стороны',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_10.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_11.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'deathTollAtTheTop' => 'Количество погибших вверху',
            'theDeathTollInTheMiddle' => 'Количество погибших в середине',
            'theDeathTollBottomLeftSide' => 'Количество погибших внизу с левой стороны',
            'theDeathTollBottomRightSide' => 'Количество погибших внизу с правой стороны',
            'numberOfVictimsTheTop' => 'Количество пострадавших вверху',
            'numberOfVictimsTheMiddle' => 'Количество пострадавших в середине',
            'numberOfVictimsAtTheBottomTheLeftSide' => 'Количество пострадавших внизу с левой стороны',
            'numberOfVictimsAtTheBottomTheRightSide' => 'Количество пострадавших внизу с правой стороны',
            'numberOfIncidentsAtTheTop' => 'Количество проишествий вверху',
            'numberOfIncidentsInTheMiddle' => 'Количество проишествий в середине',
            'numberOfIncidentsBottomLeftSide' => 'Количество проишествий внизу с левой стороны',
            'numberOfIncidentsBottomRightSide' => 'Количество проишествий внизу с правой стороны',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_12.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_13.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'deathTollAtTheTop' => 'Количество погибших вверху',
            'theDeathTollInTheMiddle' => 'Количество погибших в середине',
            'theDeathTollBottomLeftSide' => 'Количество погибших внизу с левой стороны',
            'theDeathTollBottomRightSide' => 'Количество погибших внизу с правой стороны',
            'numberOfVictimsTheTop' => 'Количество пострадавших вверху',
            'numberOfVictimsTheMiddle' => 'Количество пострадавших в середине',
            'numberOfVictimsAtTheBottomTheLeftSide' => 'Количество пострадавших внизу с левой стороны',
            'numberOfVictimsAtTheBottomTheRightSide' => 'Количество пострадавших внизу с правой стороны',
            'numberOfIncidentsAtTheTop' => 'Количество проишествий вверху',
            'numberOfIncidentsInTheMiddle' => 'Количество проишествий в середине',
            'numberOfIncidentsBottomLeftSide' => 'Количество проишествий внизу с левой стороны',
            'numberOfIncidentsBottomRightSide' => 'Количество проишествий внизу с правой стороны',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_16.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_15.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'deathTollAtTheTop' => 'Количество погибших вверху',
            'theDeathTollInTheMiddle' => 'Количество погибших в середине',
            'theDeathTollBottomLeftSide' => 'Количество погибших внизу с левой стороны',
            'theDeathTollBottomRightSide' => 'Количество погибших внизу с правой стороны',
            'numberOfVictimsTheTop' => 'Количество пострадавших вверху',
            'numberOfVictimsTheMiddle' => 'Количество пострадавших в середине',
            'numberOfVictimsAtTheBottomTheLeftSide' => 'Количество пострадавших внизу с левой стороны',
            'numberOfVictimsAtTheBottomTheRightSide' => 'Количество пострадавших внизу с правой стороны',
            'numberOfIncidentsAtTheTop' => 'Количество проишествий вверху',
            'numberOfIncidentsInTheMiddle' => 'Количество проишествий в середине',
            'numberOfIncidentsBottomLeftSide' => 'Количество проишествий внизу с левой стороны',
            'numberOfIncidentsBottomRightSide' => 'Количество проишествий внизу с правой стороны',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs__14.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs__18.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'sinceTheBeginningOfTheYearLeft' => 'С начала года слева',
            'sinceTheBeginningOfTheYearRight' => 'С начала года справа',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs__19.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'numberOfEvacuees' => 'Количество эвакуированных',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs__19-1.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'numberOfEvacuees' => 'Количество эвакуированных',
            'numberOfVictims' => 'Количество пострадавших',
            'theDeathToll' => 'Количество погибших',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('hs/hs_20-1.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'evacuatedDuringResponse' => 'Эвакуировано в ходе реагирования',
            'childrenEvacuated' => 'Эвакуировано детей',

            'injuredPerson' => 'Пострадало человек',
            'hurtChildren' => 'Пострадало детей ',

            'numberOfEvacuees' => 'Погибло человек',
            'childrenDied' => 'Погибло детей',

            'numberOfVictims' => 'Спасено человек',
            'childrenSaved' => 'Спасено детей',
        ];
        $slideType->save();
    }
}
