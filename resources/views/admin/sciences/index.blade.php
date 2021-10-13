@extends('adminlte::page')

@section('title', 'manTcic Life')

@section('content_header')
    <h1>Lista de Ciencias</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>Exito!!!</strong> {{ session('info') }}
    </div>
    @endif


    <div class="card">

        <div class="card-header">
            <a class="btn btn-primary"href="{{route('admin.sciences.create')}}">Agregar Ciencia</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($sciences as $science)
                        <tr>
                            <td>{{$science->id}}</td>
                            <td>{{$science->name}}</td>
                            <td width="10px">
                                <a href="{{route('admin.sciences.edit', $science)}}" class="btn btn-secondary">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.sciences.destroy', $science)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="4">No hay ningun rol registrado</td>
                        </tr>
                    @endforelse
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
