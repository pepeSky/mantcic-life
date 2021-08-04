@extends('adminlte::page')

@section('title', 'manTcic Life')

@section('content_header')
    <h1>Actividades Pendientes Aprobación</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>

@endif
    <div class="card">
        <div class="car-body">
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{--$service->categories->name--}}</td>
                                <td><a  class="btn btn-primary" href="{{route('admin.services.show', $service)}}">revisar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer">
        {{$services->links('vendor.pagination.bootstrap-4')}}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
