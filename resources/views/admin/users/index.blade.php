@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Список пользователей</h1>
@stop

@section('content')
    <section class="content">
        <div class="btn-group">
            <div class="row p-4">
                <a
                    href="{{route('user.create')}}"
                    class="btn btn-success"
                >
                    Добавить пользователя
                </a>
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
                            <table
                                id="example1"
                                class="table table-bordered table-striped"
                            >
                                <thead>
                                <tr>
                                    <th>E-mail</th>
                                    <th>Пользователь</th>
                                    <th>Департамент</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->firstName.' '.$user->lastName}}</td>
                                        <td>{{$user->departmentName}}</td>
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

