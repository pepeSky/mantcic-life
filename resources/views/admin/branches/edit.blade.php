@extends('adminlte::page')

@section('PepeSky', 'Dashboard')

@section('content_header')
    <h1>Lista de Ramas</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
<div class="card-body">
    {!! Form::model($branch, ['route'=>['admin.branches.update', $branch], 'method' => 'put']) !!}


        @include('admin.branches.partials.form')

        {!! Form::submit('Actualizar Rama',['class'=>'btn btn-primary'])!!}

    {!! Form::close() !!}
</div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src={{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}></script>

<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
  });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#adjective' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@stop

