<?php

namespace Database\Seeders;

use App\Domain\SlideTypes\Models\SlideTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SlideTypeSeederUniversal extends Seeder
{
    public function run()
    {
        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_01.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueColumn1' => 'Значение колонка 1',
            'selectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'valueAtTheTopColumn2' => 'Значение вверху колонка 2',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueAtTheBottomLeftSideColumn2' => 'Значение внизу с левой стороны колонка 2',
            'valueAtTheBottomRightSideColumn2' => 'Значение внизу с правой стороны колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_02.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueAtTheTopColumn1' => 'Значение вверху колонка 1',
            'selectIconInTheMiddleOfColumn1' => 'Выбрать иконку в середине колонка 1',
            'middleTextColumn1' => 'Текст в середине колонка 1',
            'valueInTheMiddleColumn1' => 'Значение в середине колонка 1',
            'textAtTheBottomColumn1' => 'Текс внизу колонка 1',
            'valueAtTheBottomLeftSideColumn1' => 'Значение внизу с левой стороны колонка 1',
            'valueAtTheBottomRightSideColumn1' => 'Значение внизу с правой стороны колонка 1',

            'selectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'valueAtTheTopColumn2' => 'Значение вверху колонка 2',
            'selectIconInTheMiddleOfColumn2' => 'Выбрать иконку в середине колонка 2',
            'middleTextColumn2' => 'Текст в середине колонка 2',
            'valueInTheMiddleColumn2' => 'Значение в середине колонка 2',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueAtTheBottomLeftSideColumn2' => 'Значение внизу с левой стороны колонка 2',
            'valueAtTheBottomRightSideColumn2' => 'Значение внизу с правой стороны колонка 2',

            'selectIconAtTheTopColumn3' => 'Выбрать иконку вверху колонка 3',
            'topTextColumn3' => 'Текст вверху колонка 3',
            'valueAtTheTopColumn3' => 'Значение вверху колонка 3',
            'selectIconInTheMiddleOfColumn3' => 'Выбрать иконку в середине колонка 3',
            'middleTextColumn3' => 'Текст в середине колонка 3',
            'valueInTheMiddleColumn3' => 'Значение в середине колонка 3',
            'textAtTheBottomColumn3' => 'Текс внизу колонка 3',
            'valueAtTheBottomLeftSideColumn3' => 'Значение внизу с левой стороны колонка 3',
            'valueAtTheBottomRightSideColumn3' => 'Значение внизу с правой стороны колонка 3',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_03.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueAtTheTopColumn1' => 'Значение вверху колонка 1',
            'selectIconInTheBottomColumn1' => 'Выбрать иконку в внизу колонка 1',
            'textAtTheBottomColumn1' => 'Текс внизу колонка 1',
            'valueInTheMiddleColumn1' => 'Значение внизу колонка 1',

            'selectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'valueAtTheTopColumn2' => 'Значение вверху колонка 2',
            'selectIconInTheBottomColumn2' => 'Выбрать иконку внизу колонка 2',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueIAtTheBottomColumn2' => 'Значение внизу колонка 2',

            'selectIconAtTheTopColumn3' => 'Выбрать иконку вверху колонка 3',
            'topTextColumn3' => 'Текст вверху колонка 3',
            'valueAtTheTopColumn3' => 'Значение вверху колонка 3',
            'selectIconInTheBottomColumn3' => 'Выбрать иконку внизу колонка 3',
            'textAtTheBottomColumn3' => 'Текс внизу колонка 3',
            'valueIAtTheBottomColumn3' => 'Значение внизу колонка 3',

            'selectIconAtTheTopColumn4' => 'Выбрать иконку вверху колонка 4',
            'topTextColumn4' => 'Текст вверху колонка 4',
            'valueAtTheTopColumn4' => 'Значение вверху колонка 4',
            'selectIconInTheBottomColumn4' => 'Выбрать иконку внизу колонка 4',
            'textAtTheBottomColumn4' => 'Текс внизу колонка 4',
            'valueIAtTheBottomColumn4' => 'Значение внизу колонка 4',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_04.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'dateColumn1' => 'Дата колонка 1',
            'placeColumn1' => 'Место колонка 1',
            'middleTextColumn1' => 'Текст в середине колонка 1',

            'selectIcon1InTheBottomColumn1' => 'Выбрать иконку 1 внизу колонка 1',
            'text1AtTheBottomColumn1' => 'Текс 1 внизу колонка 1',
            'value1AtTheBottomRightSideColumn1' => 'Значение 1 внизу с правой стороны колонка 1',

            'selectIcon2InTheBottomColumn1' => 'Выбрать иконку 2 внизу колонка 1',
            'text2AtTheBottomColumn1' => 'Текс 2 внизу колонка 1',
            'value2AtTheBottomRightSideColumn1' => 'Значение 2 внизу с правой стороны колонка 1',

            'selectIcon3InTheBottomColumn1' => 'Выбрать иконку 3 внизу колонка 1',
            'text3AtTheBottomColumn1' => 'Текс 3 внизу колонка 1',
            'value3AtTheBottomRightSideColumn1' => 'Значение 3 внизу с правой стороны колонка 1',

            'imagesColumn2' => 'Изображения колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_05.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueColumn1' => 'Значение колонка 1',
            'descriptionColumn2' => 'Описание колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_06.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTop' => 'Выбрать иконку вверху',
            'date' => 'Дата',
            'value' => 'Значение',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_07.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueColumn1' => 'Значение колонка 1',
            'selectIconInTheBottomColumn1' => 'Выбрать иконку в внизу колонка 1',
            'textAtTheBottomColumn1' => 'Текс внизу колонка 1',
            'valueInTheMiddleColumn1' => 'Значение внизу 1 колонка',
            'imagesColumn2' => 'Изображения колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_08.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'textUnderTheIconColumn1' => 'Текст под иконкой колонка 1',
            'imagesColumn2' => 'Изображения колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_09.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'dateColumn1' => 'Дата колонка 1',
            'placeColumn1' => 'Место колонка 1',
            'typeOfWorkColumn1' => 'Вид работ колонка 1',
            'imagesColumn2' => 'Изображения колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_10.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueColumn1' => 'Значение колонка 1',

            'SelectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'valueColumn2' => 'Значение колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_11.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'textUnderTheIconColumn1' => 'Текст под иконкой колонка 1',
            'valueColumn1' => 'Значение колонка 1',
            'textAtTheBottomColumn1' => 'Текс внизу колонка 1',
            'valueAtTheBottomLeftSideColumn1' => 'Значение внизу с левой стороны колонка 1',
            'valueAtTheBottomRightSideColumn1' => 'Значение внизу с правой стороны колонка 1',

            'selectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'textUnderTheIconColumn2' => 'Текст под иконкой колонка 2',
            'valueColumn2' => 'Значение колонка 2',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueAtTheBottomLeftSideColumn2' => 'Значение внизу с левой стороны колонка 2',
            'valueAtTheBottomRightSideColumn2' => 'Значение внизу с правой стороны колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_12.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'textUnderTheIconColumn1' => 'Текст под иконкой колонка 1',
            'valueColumn1' => 'Значение колонка 1',

            'selectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'valueAtTheTopColumn2' => 'Значение вверху колонка 2',
            'selectIconInTheBottomColumn2' => 'Выбрать иконку внизу колонка 2',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueIAtTheBottomColumn2' => 'Значение внизу колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_13.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTop' => 'Выбрать иконку вверху',
            'topText' => 'Текст вверху',
            'value' => 'Значение ',

            'textAtTheBottomColumn1' => 'Текс внизу колонка 1',
            'valueIAtTheBottomColumn1' => 'Значение внизу колонка 1',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueIAtTheBottomColumn2' => 'Значение внизу колонка 2',
            'textAtTheBottomColumn3' => 'Текс внизу колонка 3',
            'valueIAtTheBottomColumn3' => 'Значение внизу колонка 3',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_14.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'text1' => 'Текс 1',
            'text2' => 'Текс 2',
            'text3' => 'Текс 3',
            'text4' => 'Текс 4',
            'valueRightSide1' => 'Значение с правой стороны 1',
            'valueLeftSide1' => 'Значение с левой стороны 1',
            'valueRightSide2' => 'Значение с правой стороны 2',
            'valueLeftSide2' => 'Значение с левой стороны 2',
            'valueRightSide3' => 'Значение с правой стороны 3',
            'valueLeftSide3' => 'Значение с левой стороны 3',
            'valueRightSide4' => 'Значение с правой стороны 4',
            'valueLeftSide4' => 'Значение с левой стороны 4',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_15.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTopColumn1' => 'Выбрать иконку вверху колонка 1',
            'topTextColumn1' => 'Текст вверху колонка 1',
            'valueColumn1' => 'Значение колонка 1',

            'selectIconAtTheTopColumn2' => 'Выбрать иконку вверху колонка 2',
            'topTextColumn2' => 'Текст вверху колонка 2',
            'valueAtTheTopColumn2' => 'Значение вверху колонка 2',
            'selectIconInTheBottomColumn2' => 'Выбрать иконку внизу колонка 2',
            'textAtTheBottomColumn2' => 'Текс внизу колонка 2',
            'valueIAtTheBottomColumn2' => 'Значение внизу колонка 2',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_16.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTop' => 'Выбрать иконку вверху',
            'topText' => 'Текст вверху',
            'valueLeftSide' => 'Значение с левой стороны',
            'valueRightSide' => 'Значение с правой стороны',
            'selectIconInTheBottom' => 'Выбрать иконку внизу',
            'textAtTheBottom' => 'Текст внизу',
            'valueIAtTheBottom' => 'Значение внизу',
        ];
        $slide->save();

        $slide = new SlideTypes();
        $slide->image_path = Storage::path('universal/Doklad_17.jpg');
        $slide->field_maps_json = [
            'name' => 'Название',
            'selectIconAtTheTop' => 'Выбрать иконку вверху',
            'topText' => 'Текст вверху',
            'selectIcon1' => 'Выбрать иконку 1',
            'textUnderTheIcon1' => 'Текст под иконкой 1',
            'SelectIcon2' => 'Выбрать иконку 2',
            'textUnderTheIcon2' => 'Текст под иконкой 2',
            'selectIcon3' => 'Выбрать иконку 3',
            'textUnderTheIcon3' => 'Текст под иконкой 3',
            'selectIcon4' => 'Выбрать иконку 4',
            'textUnderTheIcon4' => 'Текст под иконкой 4',
        ];
        $slide->save();
    }
}
