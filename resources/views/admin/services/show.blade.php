<x-guest-layout>
    @livewire('welcome-header')

    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                @if ($service->image)
                    <img class="h-60 w-full object-cover" src="{{ Storage::url($service->image->url) }}" alt="">
                @else
                    <img class="h-60 w-full object-cover"
                        src="https://pixabay.com/es/illustrations/marca-marcador-mano-escribir-804938/" alt="">
                @endif
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{ $service->title }}</h1>
                <h2 class="text-xl mb-3">{{ $service->subtitle }}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{ $service->level }}</p>
                <p class="mb-2"><i class="fas fa"></i> Categoría: {{ $service->category }}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Modúlos Entregados: {{ $service->module_count }}</p>
                <p><i class="fas fa-star"></i> Calificación: {{ $service->rating }}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">

        @if (session('info'))
                <div class="lg:col-span-3" x-data="{open: true}" x-show="open">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Ocurrio un error!</strong>
                        <span class="block sm:inline">{{session('info')}}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                          <svg x-on:click="open=false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                <div>
        @endif

        <div class="order-2 lg:col-span-2 lg:order-1">

            {{-- Caracteristicas / metas --}}
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Características</h1>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @forelse ($service->goals as $goal)
                            <li class="text-gray-700 text-base"><i
                                    class="fas fa-check text-gray-600 mr-2"></i>{{ $goal->name }}</li>

                        @empty
                            <li class="text-gray-700 text-base">Este servicio no tiene asignada ninguna meta</li>
                        @endforelse
                    </ul>
                </div>
            </section>

             {{-- Modulos --}}
            <section class="mb-12">
                <h1 class="font-bold text-3xl mb-2">Modúlos Mantenimiento</h1>

                @forelse ($service->modules as $module)
                    <article class="mb-4 shadow" @if ($loop->first) x-data="{ open: true }"
                        x-data="{ open: false }" @endif>

                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200"
                            x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{ $module->name }}</h1>
                        </header>

                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($module->activities as $activity)

                                    <li class="text-gray-700 text-base"><i
                                            class="fas fa-play-circle mr-2 text-blue-600"></i>{{ $activity->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </article>

                @empty

                    <article class="card">
                        <div class="card-body">
                            Este servicio no tiene ningun modulo asignado
                        </div>
                    </article>

                @endforelse
            </section>

             {{-- Requisitos --}}
            <section class="mb-12">
                <h1 class="font-bold text-3xl">Requisitos</h1>
                <ul class="list-disc list-inside">
                    @forelse ($service->requirements as $requirement)
                        <li class="text-gray-700 text-base">{{ $requirement->name }}</li>
                    @empty
                        <li class="text-gray-700 text-base">Este servicio no tienen ningun requerimiento</li>
                    @endforelse
                </ul>
            </section>

            <section>
                <h1 class="font-bold text-3xl">Descripción</h1>

                <div class="text-gray-700 text-base">{!!$service->description!!}</div>
            </section>
        </div>

        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{-- $service->worker->profile_photo_url --}}" alt="{{-- $service->worker->name --}}">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray 500 text-lg">Responsable: {{-- $service->worker->name --}}</h1>
                            <a class="text-blue-400 text-sm font-bold" href="">{{-- '@' . Str::slug($service->worker->name, '') --}}</a>
                        </div>
                    </div>

                    <form action="{{ route('admin.services.approved', $service)}}" class="mt-4" method="post">
                        @csrf
                        <button class="btn btn-danger w-full">Aporbar Servicio</button>
                    </form>

                </div>
            </section>

        </div>

    </div>
</x-guest-layout>
