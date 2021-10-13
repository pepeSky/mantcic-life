<x-app-layout :course="$course">

    <h1 class="text-2xl font-bold">INFORMACION DE LA UNIDAD</h1>
    <hr class="mt-2 mb-6">


    {!! Form::model($unit, ['route' => ['mantenance.services.update', $unit], 'method' => 'put', 'files' => true]) !!}

    @include('mantenance.units.partials.form')

    <div class="flex justify-end">
        {!! Form::submit('Actualizar Información', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/mantenance/units/form.js') }}"></script>
    </x-slot>

</x-app-layout>
