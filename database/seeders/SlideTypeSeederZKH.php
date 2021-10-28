<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideTypeSeederZKH extends Seeder
{
    public function run()
    {
        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_01.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'operatingModeOfZKH' => 'Режим работы предприятий ЖКХ',
            'emergencySituationsWithSignificantConsequences' => 'Аварийные ситуации со значительными последствиями',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_02.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'mkdInTheZone' => 'МКД в зоне',
            'szoInTheZone' => 'СЗО в зоне',
            'status' => 'Статус',
            'image' => 'Изображение',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_03.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'equipmentUnitsInvolved' => 'Задействовано единиц техники',
            'involvedMan' => 'Задействовано человек',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_04.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'removedStreetsAcrossTheRB_km' => 'Убрано улиц по РБ, км',
            'equipmentUnitsInvolved' => 'Задействовано единиц техники',
            'clearedYardsInRB' => 'Очищено дворов по РБ',
            'clearedVisorsByRB' => 'Очищено козырьков по РБ',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_04-1.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'removedStreetsAcrossTheRB_km' => 'Убрано улиц по РБ, км',
            'removedYardsInRB' => 'Убрано дворов по РБ',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_05.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'mowedStreets_km' => 'Произведен обкос улиц, км',
            'removedYardsInRB' => 'Убрано дворов по РБ',
            'mowedOutYards' => 'Произведен обкос дворов',
            'roadSidesMowed_km' => 'Произведен обкос обочин дорог, км',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_05-1.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'wateringOfStreets_km' => 'Произведен полив улиц, км',
            'yardsWereWatered' => 'Произведен полив дворов',
            'wateringOfRoads_km' => 'Произведен полив дорог, км',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_06.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'typeOfWork' => 'Вид работ',
            'image' => 'Изображение',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_07.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'inspectedMKD' => 'Осмотрено МКД',
            'publicPlacesCovered' => 'Охвачено мест общественного пользования',
            'inSettlements' => 'В населенных пунктах',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_08.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'typeOfWork' => 'Вид работ',
            'image' => 'Изображение',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_09.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'revealedViolationsInMKD' => 'Выявлено нарушений в МКД',
            'drawnUpProtocols' => 'Составлено протоколов',
            'typeOfWork' => 'Вид работ',
            'image' => 'Изображение',
        ];
        $slide->save()
        $slide = new SlideTypes();
        $slide->image_path = Storage::path('zkh/zkh_10.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'disinfectantAvirBakIssuedLeft' => 'Выдано дезинфицирующего средства "АВирБак", л. слева',
            'disinfectantAvirBakIssuedRight' => 'Выдано дезинфицирующего средства "АВирБак", справа',
            'theNumberOfMunicipalitiesThatReceivedTheAVirBakDisinfectant' => 'Количество муниципальных образований, получивших дезинфицирующее средство "АВирБак"',
            'didNotApplyForDisinfectantsMunicipalities' => 'Не обратились за получением дезинфицирующих средств (муниципальных образований)',
        ];
        $slide->save();
    }
}
