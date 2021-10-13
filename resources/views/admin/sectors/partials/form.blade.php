<div class="form-group">

    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del sector']) !!}

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
    {!! Form::label('branch_id', 'Ramas') !!}
    {!! Form::select('branch_id', $branches , null, ['class'=>'form-control']) !!}

    @error('branch_id')
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


