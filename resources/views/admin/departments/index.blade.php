@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Список департаментов</h1>
@stop

@section('content')
    <section class="content">
        <div class="btn-group">
            <div class="row p-4">
                <a href="{{route('departments.create')}}" class="btn btn-success">Добавить отрасль</a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Департамент</th>
                                    <th>Images</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($departments as $department)

                                <tr>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->imagePath}}</td>
                                </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
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
