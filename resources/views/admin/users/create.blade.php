@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавить пользователя</h1>
@stop
@section('plugins.BsCustomFileInput', true)

@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <!-- /.card-header -->
                        <form
                            id="quickForm"
                            novalidate="novalidate"
                            method="POST"
                            action="{{route('user.store')}}"
                        >
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <x-adminlte-input
                                        name="firstName"
                                        label="Имя"
                                        placeholder="Введите имя ..."
                                        fgroup-class="col-md-12"
                                        value="{{old('firstName')}}"
                                    />
                                </div>
                                <div class="row">
                                    <x-adminlte-input
                                        name="lastName"
                                        label="Фамилия"
                                        placeholder="Введите фамилию ..."
                                        fgroup-class="col-md-12"
                                        value="{{old('lastname')}}"
                                    />
                                </div>
                                <div class="row">
                                    <x-adminlte-input
                                        name="email"
                                        label="Email"
                                        type="email"
                                        placeholder="Введите email ..."
                                        fgroup-class="col-md-12"
                                        value="{{old('email')}}"
                                    />
                                </div>
                                <div class="row">
                                    <x-adminlte-input
                                        name="password"
                                        label="Пароль"
                                        type="password"
                                        placeholder="Введите пароль ..."
                                        fgroup-class="col-md-12"
                                        value="{{old('password')}}"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="departmentId">Выберите категорию</label>
                                    <select
                                        name="departmentId"
                                        class="form-control @error('departmentId') is-invalid @enderror"
                                        id="departmentId"
                                    >
                                        <option></option>
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
                            <!-- /.card-body -->
                            <div class="form-group mb-0">
                                <div class="card-footer">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@stop
