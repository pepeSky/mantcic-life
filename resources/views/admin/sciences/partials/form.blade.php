<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,['class'=>'form-control','placeholder'=>' Ingresa el nombre de la ciencia']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null,['class'=>'form-control','placeholder'=>' Ingresa el nombre del slug', 'readOnly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('state', 1, true) !!}
        Descripción
    </label>
    <label>
        {!! Form::radio('state', 2) !!}
        Definición
    </label>

    @error('status')
        <br>
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


