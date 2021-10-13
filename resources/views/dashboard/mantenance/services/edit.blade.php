
<x-mantenance-layout :course="$course">

    <h1 class="text-2xl font-bold">INFORMACION DEL SERVICIO</h1>
    <hr class="mt-2 mb-6">


    {!! Form::model($service, ['route' => ['mantenance.services.update', $service], 'method' => 'put', 'files' => true]) !!}

    @include('mantenance.services.partials.form')

    <div class="flex justify-end">
        {!! Form::submit('Actualizar Información', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/mantenance/services/form.js') }}"></script>
    </x-slot>

</x-mantenance-layout>
