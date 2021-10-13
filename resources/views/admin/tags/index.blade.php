@extends('adminlte::page')

@section('PepeSky', 'Dashboard')

@section('content_header')
    <a href="{{route('admin.tags.create')}}" class="btn btn-primary float-right">Nueva Etiqueta</a>

    <h1>Listado de Etiquetas</h1>
@stop

@section('content')

@if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Adjetivo</th>
                        <th>Color</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{!!$tag->adjective!!}</td>
                        <td>{{$tag->color}}</td>
                        <td width="10px">
                            <a href="{{route('admin.tags.show',$tag)}}" class="btn btn-info btn-sm">Observar</a>
                        </td>
                        <td width="10px">
                            <a href="{{route('admin.tags.edit',$tag)}}" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type='submit' class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
