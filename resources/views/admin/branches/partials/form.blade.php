<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la rama']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del slug', 'readOnly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('science_id', 'Ciencia') !!}
    {!! Form::select('science_id', $sciences , null, ['class'=>'form-control']) !!}

    @error('science_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('adjective', 'Adjetivo') !!}
    {!! Form::textarea('adjective', null, ['class'=>'form-control']) !!}

    @error('adjective')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>


