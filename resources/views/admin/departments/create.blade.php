@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавить департамент</h1>
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

                            <form id="quickForm" novalidate="novalidate" method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <x-adminlte-input name="name" label="Название" placeholder="Введите название ..."
                                                          fgroup-class="col-md-12" />
                                    </div>

                                    <x-adminlte-input-file  name="image" label="Загрузка изображения" legend="Выбрать"  placeholder="Выберите файл ..."/>

                                </div>
                                <!-- /.card-body -->
                                <div class="form-group mb-0">
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Добавить</button>
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

