@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавить отрасль</h1>
@stop

@section('plugins.BsCustomFileInput', true)

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <form
                    action="{{route('speakers.update',[$speaker->id , $speaker->slug])}}"
                    enctype="multipart/form-data"
                    id="quickForm"
                    novalidate="novalidate"
                    method="POST"
                >
                    @csrf
                    <div class="card-body">
                        <x-adminlte-input
                            name="firstName"
                            label="Имя"
                            placeholder="Введите имя ..."
                            fgroup-class="col-md-12"
                            value="{{$speaker->firstName}}"
                        />
                        <x-adminlte-input
                            name="lastName"
                            label="Фамилия"
                            placeholder="Введите имя ..."
                            fgroup-class="col-md-12"
                            value="{{$speaker->lastName}}"
                        />
                        <x-adminlte-input
                            name="surname"
                            label="Отчество"
                            placeholder="Введите имя ..."
                            fgroup-class="col-md-12"
                            value="{{$speaker->surname}}"
                        />
                        <x-adminlte-input
                            name="position"
                            label="Должность"
                            legend="Выбрать"
                            placeholder="Выберите файл ..."
                            fgroup-class="col-md-12"
                            value="{{$speaker->position}}"
                        />
                        <x-adminlte-input-file
                            name="image"
                            label="Загрузка изображения"
                            legend="Выбрать"
                            placeholder="Выберите файл ..."
                            fgroup-class="col-md-12"
                        />
                        <div class="form-group col-md-12">
                            <label for="departmentId">Выберите отрасль</label>
                            <select
                                name="departmentId"
                                class="form-control @error('departmentId') is-invalid @enderror"
                                id="departmentId"
                            >
                                <option value="{{$speaker->departmentID}}">
                                    {{$speaker->department}}
                                </option>
                                @foreach($departments as $department)
                                <option
                                    value="{{$department->id}}"
                                >
                                    {{$department->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('departmentId')
                            <span
                                class="invalid-feedback d-block"
                                role="alert"
                            >
                                <strong> {{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Добавить
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

@stop
