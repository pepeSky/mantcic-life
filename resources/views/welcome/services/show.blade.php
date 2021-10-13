<x-guest-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{ Storage::url($service->image->url) }}" alt="">
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

        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Características</h1>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($service->goals as $goal)
                            <li class="text-gray-700 text-base"><i
                                    class="fas fa-check text-gray-600 mr-2"></i>{{ $goal->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h1 class="font-bold text-3xl mb-2">Modúlos Mantenimiento</h1>

                @foreach ($service->modules as $module)
                    <article class="mb-4 shadow" @if ($loop->first) x-data="{ open: true }"
                @else
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
                @endforeach
            </section>

            <section class="mb-12">
                <h1 class="font-bold text-3xl">Requisitos</h1>
                <ul class="list-disc list-inside">
                    @foreach ($service->requirements as $requirement)
                        <li class="text-gray-700 text-base">{{ $requirement->name }}</li>
                    @endforeach
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
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{-- $service->worker->profile_photo_url --}}"
                            alt="{{-- $service->worker->name --}}">

                        <div class="ml-4">
                            <h1 class="font-bold text-gray 500 text-lg">Responsable: {{-- $service->worker->name --}}</h1>
                            <a class="text-blue-400 text-sm font-bold" href="">{{-- '@' . Str::slug($service->worker->name, '') --}}</a>
                        </div>
                    </div>
                    @can('enrolled', $service)

                        <a href="{{ route('services.status', $service)}}" class="btn btn-danger btn-block mt-4">Continuar con el Servicio</a>

                    @else
                        <form action="{{ route('services.enrolled', $service) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-block mt-4" type="submit">Contratar el Servicio</button>
                        </form>
                    @endcan

                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach ($services as $service)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{ Storage::url($service->image->url) }}" alt="">
                        <div class="ml-3">
                            <h1>
                                <a class="font-bold"
                                    href="{{ route('services.show', $service) }}">{{ Str::limit($service->subtitle, 80) }}</a>
                            </h1>

                            <div clas="flex items-center mb-2">
                                <img class="h-8 w-8 object-cover rounded-full shadow-lg" src="{{-- $simliar->worker->profile_photo_url --}}"
                                    alt="">
                                <p class="text-gray-700 text-sm ml-2">{{-- $similar->worker->name --}}</p>
                            </div>

                            <p class="text-sm"><i class="fas fa-star text-yellow-400 mr-2">{{ $service->rating }}</i>
                            </p>

                        </div>
                    </article>
                @endforeach
            </aside>
        </div>

    </div>

</x-guest-layout>
