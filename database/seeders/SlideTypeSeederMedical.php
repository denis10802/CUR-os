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
            'coronavirusInfectionCasesRegistered' => 'Зарегистрировано случаев короновирусной инфекции',
            'growthRate' => 'Темп прироста (Индекс)',
            'overThePastDay' => 'За прошедшие сутки',
            'duringTheWeek' => 'За неделю',
            'morbidityRatePer100ThousandPopulation' => 'Уровень заболеваемости на 100 тыс. населения',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_02.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'dischargedWithRecoveryForTheEntireTimeOfObservationOnTheLeft' => 'Выписано с выздоровлением за все время наблюдения слева',
            'dischargedWithRecoveryForTheEntireTimeOfObservationOnTheRight' => 'Выписано с выздоровлением за все время наблюдения справа',
            'overThePastDay' => 'За прошедшие сутки',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_03.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'areHospitalizedOnTheLeft' => 'Находятся на стационарном лечении слева',
            'areOnOutpatientTreatmentOnTheRight' => 'Находятся на амбулаторном лечении справа',
            'inTheIntensiveCareUnit' => 'В отделении интенсивной терапии',
            'onVentilator' => 'На ИВЛ',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_04.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'worksLaboratories' => 'Работает лабораторий',
            'sinceTheBeginningOfThePandemicAllStudiesHaveBeenCompleted' => 'С начала пандемии выполнено всего исследований',
            'ofWhichPrivate' => 'Из них частных',
            'overThePastDay' => 'За прошедшие сутки',
            'testingRateRer100ThousandPopulation' => 'Уровень тестирования на 100 тыс. населения',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_05.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'totalAvailableForPatientsWithNCI' => 'Всего для пациентов с НКИ доступно',
            'busyOnTheLeft' => 'Занято слева',
            'busyOnTheRight' => 'Занято справа',
            'freeLeft' => 'Свободно слева',
            'freeRight' => 'Свободно справа',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_06.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'separateSubdivisionClinicalAndDiagnosticInfectiousDiseaseCenterUfaDistrictZubovoVillage' => 'Обособленное подразделение (филиал)
                Клинико-диагностический инфекционный центр (Уфимский район, с. Зубово).
                На лечении находится, чел.',
            'separateSubdivisionClinicalAndDiagnosticInfectiousDiseaseCenterSterlitamak' => 'Обособленное подразделение (филиал)
                Клинико-диагностический инфекционный центр (г. Стерлитамак).
                На лечении находится, чел.',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_07.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'totalNumberOfCallsPerKnock' => 'Общее количество вызовов за стуки',
            'totalNumberOfWorkingMedicalTeams' => 'Общее количество работающих врачебных бригад',
            'theNumberOfCallsForEpidemiologicalIndicationsOnTheLeft' => 'Количество вызовов по эпидемиологическим показаниям слева',
            'numberOfCallsForEpidemiologicalIndicationsOnTheRight' => 'Количество вызовов по эпидемиологическим показаниям справа',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_08.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'ambulance20minInterval' => 'По скорой медицинской помощи (20 мин. интервал)',
            'totalNumberOfWorkingMedicalTeams' => 'Общее количество работающих врачебных бригад',
            'forUrgentIndicationsWithin2Hours' => 'По неотложным показаниям (в течение 2 часов)',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_09.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'amountOfReceivedVaccineGamCOVIDVacSputnikVagainstNewCoronavirusInfection' => 'Количество поступившей вакцины
                "Гам-КОВИД-Вак" (Спутник-V) от новой коронавирусной инфекции',
            'firstIntroductionOnTheLeft' => 'Первое введение слева',
            'firstIntroductionOnTheRight' => 'Первое введение справа',
            'secondIntroductionFromTheLeft' => 'Второе введение слева',
            'secondIntroductionFromTheRight' => 'Второе введение справа',
            'overThePastDay' => 'За прошедшие сутки',
            'receivedInMonth' => 'Поступило за месяц',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_10.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'amountOfReceivedEpiVacCoronaVaccineAgainstNewCoronavirusInfection' => 'Количество поступившей вакцины
                ЭпиВакКорона от новой коронавирусной инфекции',
            'firstIntroductionOnTheLeft' => 'Первое введение слева',
            'firstIntroductionOnTheRight' => 'Первое введение справа',
            'secondIntroductionFromTheLeft' => 'Второе введение слева',
            'secondIntroductionFromTheRight' => 'Второе введение справа',
            'overThePastDay' => 'За прошедшие сутки',
            'receivedInMonth' => 'Поступило за месяц',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_11.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'gamCOVIDVakSputnikVReceivedPInTotalInTheRepublicOfBashkortostan' => '"Гам-КОВИД-Вак" (Спутник-V) Всего поступило в Республику Башкортостан',
            'epiVacCoronaReceivedInTotalInTheRepublicOfBashkortostan' => '«ЭпиВакКорона» Всего поступило в Республику Башкортостан',
            'inoculatedWith1and2ComponentsOnTheLeft' => 'Привито 1 и 2 компонентами слева',
            'inoculatedWith1and2ComponentsOnTheRight' => 'Привито 1 и 2 компонентами справа',
            'inoculatedWith1and2ComponentsOnTheLeftInPercents' => 'Привито 1 и 2 компонентами слева',
            'inoculatedWith1and2ComponentsOnTheRightInPercents' => 'Привито 1 и 2 компонентами справа',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('medical/Zdrav_12.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'numberOfRequestsSinceNovember_16_2020' => 'Количество обращений с 16 ноября 2020 г',
            'duringTheWeek' => 'За неделю',
            'numberOfRequestsForVaccinationFromNKIPerWeekOnTheLeft' => 'Количество обращений по вопросу вакцинации от НКИ за неделю слева',
            'numberOfRequestsForVaccinationFromNKIPerWeekOnTheRight' => 'Количество обращений по вопросу вакцинации от НКИ за неделю справа',
        ];
        $slide->save();
    }
}
