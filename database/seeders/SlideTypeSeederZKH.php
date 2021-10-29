<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideTypeSeederZKH extends Seeder
{
    public function run()
    {
        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_01.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'operatingModeOfZKH' => 'Режим работы предприятий ЖКХ',
            'emergencySituationsWithSignificantConsequences' => 'Аварийные ситуации со значительными последствиями',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_02.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'mkdInTheZone' => 'МКД в зоне',
            'szoInTheZone' => 'СЗО в зоне',
            'status' => 'Статус',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_03.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'equipmentUnitsInvolved' => 'Задействовано единиц техники',
            'involvedMan' => 'Задействовано человек',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_04.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'removedStreetsAcrossTheRB_km' => 'Убрано улиц по РБ, км',
            'equipmentUnitsInvolved' => 'Задействовано единиц техники',
            'clearedYardsInRB' => 'Очищено дворов по РБ',
            'clearedVisorsByRB' => 'Очищено козырьков по РБ',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_04-1.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'removedStreetsAcrossTheRB_km' => 'Убрано улиц по РБ, км',
            'removedYardsInRB' => 'Убрано дворов по РБ',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_05.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'mowedStreets_km' => 'Произведен обкос улиц, км',
            'removedYardsInRB' => 'Убрано дворов по РБ',
            'mowedOutYards' => 'Произведен обкос дворов',
            'roadSidesMowed_km' => 'Произведен обкос обочин дорог, км',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_05-1.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'wateringOfStreets_km' => 'Произведен полив улиц, км',
            'yardsWereWatered' => 'Произведен полив дворов',
            'wateringOfRoads_km' => 'Произведен полив дорог, км',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_06.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'typeOfWork' => 'Вид работ',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_07.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'inspectedMKD' => 'Осмотрено МКД',
            'publicPlacesCovered' => 'Охвачено мест общественного пользования',
            'inSettlements' => 'В населенных пунктах',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_08.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'typeOfWork' => 'Вид работ',
            'images' => 'Изображения',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_09.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'revealedViolationsInMKD' => 'Выявлено нарушений в МКД',
            'drawnUpProtocols' => 'Составлено протоколов',
            'typeOfWork' => 'Вид работ',
            'image' => 'Изображение',
        ];
        $slideType->save();

        $slideType = new SlideType();
        $slideType->image_path = Storage::path('zkh/zkh_10.jpg');
        $slideType->fields_map = [
            'name' => 'Название',
            'disinfectantAvirBakIssuedLeft' => 'Выдано дезинфицирующего средства "АВирБак", л. слева',
            'disinfectantAvirBakIssuedRight' => 'Выдано дезинфицирующего средства "АВирБак", справа',
            'theNumberOfMunicipalitiesThatReceivedTheAVirBakDisinfectant' => 'Количество муниципальных образований, получивших дезинфицирующее средство "АВирБак"',
            'didNotApplyForDisinfectantsMunicipalities' => 'Не обратились за получением дезинфицирующих средств (муниципальных образований)',
        ];
        $slideType->save();
    }
}
