@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Список типов слайдов</h1>
@stop

@section('content')

    <section class="content">
        <div class="row">

            @foreach($slideTypes as $slideType)
                <div class="col-md-4">
                    <div class="card card-widget">
                        <div>
                            <img
                                width="400"
                                height="250"
                                src="{{Storage::disk('slide_types')->url($slideType->imagePath)}}"
                                alt="slide"
                            >
                        </div>
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">

                                @foreach($slideType->fieldsMap as $field)
                                    <li class="nav-item p-1">
                                        {{$field}}
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


@stop
