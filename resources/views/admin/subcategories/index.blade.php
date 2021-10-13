@extends('adminlte::page')

@section('title', 'manTcic Life')

@section('content_header')
    <h1>Lista de Subcategorías</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>Exito!!!</strong> {{ session('info') }}
    </div>
    @endif


    <div class="card">

        <div class="card-header">
            <a class="btn btn-primary"href="{{route('admin.subcategories.create')}}">Agregar Subcategoría</a>
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

                    @forelse ($subcategories as $subcategory)
                        <tr>
                            <td>{{$subcategory->id}}</td>
                            <td>{{$subcategory->name}}</td>
                            <td width="10px">
                                <a href="{{route('admin.subcategories.edit', $subcategory)}}" class="btn btn-secondary">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.subcategories.destroy', $subcategory)}}" method="POST">
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
