<div class="mb-4">
    {!! Form::label('title', 'Titulo del Servicio:') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1 rounded-md'. ($errors->has('title') ? ' border-red-600' : '')]) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del Servicio:') !!}
    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1 rounded-md' . ($errors->has('slug') ? ' border-red-600' : '')]) !!}

    @error('slug')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'Subtitulo del Servicio:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1 rounded-md' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}

    @error('subtitle')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripción del Servicio:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1 rounded-md' . ($errors->has('description') ? ' border-red-600' : '')]) !!}

    @error('description')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1 rounded-md']) !!}
    </div>

    <div>
        {!! Form::label('level_id', 'Niveles') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1 rounded-md']) !!}
    </div>

    <div>
        {!! Form::label('price_id', 'Precio') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input block w-full mt-1 rounded-md']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del Servicio</h1>

<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($services->image)
            <img id="picture" class="w-full h-64 object-cover object-center"
                src="{{ Storage::url($service->image->url) }}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center"
                src="https://images.pexels.com/photos/4488651/pexels-photo-4488651.jpeg?cs=srgb&dl=pexels-cottonbro-4488651.jpg&fm=jpg" alt="">
        @endisset
    </figure>
    <div>
        <p class="mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perferendis maiores quaerat ducimus voluptas a id ipsam, voluptates molestias, architecto doloremque nam et deleniti quia eveniet non verosoluta nisi.</p>

        {!! Form::file('file',['class' => 'form-input w-full' . ($errors->has('file') ? ' border-red-600' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}
            
        @error('file')
            <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror
    </div>
</div>
