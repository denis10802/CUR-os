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
            <div class="row">
                @foreach($speakers as $speaker)
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{Storage::url($speaker->imagePath)}}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$speaker->lastName.' '.$speaker->firstName.' '.$speaker->surname}}</h3>

                                <p class="text-muted text-center">{{$speaker->position}}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>{{$speaker->department}}</b>
                                    </li>
                                </ul>

                                <a href="{{route('speakers.edit', [$speaker->id, $speaker->slug])}}" class="btn btn-primary btn-block"><b>Изменить</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>

@stop
