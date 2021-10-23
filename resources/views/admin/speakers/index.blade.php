@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Добавить отрасль</h1>
@stop


@section('content')

    <section class="content">
        <div class="btn-group">
            <div class="row p-4">
                <a
                    href="{{route('speakers.create')}}"
                    class="btn btn-success"
                >
                    Добавить спикера
                </a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Nina Mcintire</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b>
                            </li>
                        </ul>

                        <a href="{{route('speakers.edit','slug')}}" class="btn btn-primary btn-block"><b>Изменить</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>

@stop
