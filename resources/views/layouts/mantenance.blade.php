<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <div class="container py-8 grid grid-cols-5 gap-6">
            <aside>
                <h1 class="font-bold text-lg mb-4">Edición del Servicio</h1>
                <ul class="text-sm text-gray-600">
                    <li
                    class="leading-7 mb-1 border-l-4 @routeIs('mantenance.services.edit', $service) border-indigo-400 @else border-transparent @endif pl-2">
                        <a href="{{ route('mantenance.services.edit', $service) }}">Información del Servicio</a>
                    </li>

                    <li
                    class="leading-7 mb-1 border-l-4 @routeIs('mantenance.services.curriculum', $service) border-indigo-400 @else border-transparent @endif pl-2">
                        <a href="{{ route('mantenance.services.curriculum', $service) }}">Actividades del Servicio</a>
                    </li>

                    <li
                    class="leading-7 mb-1 border-l-4 @routeIs('mantenance.services.goals', $service) border-indigo-400 @else border-transparent @endif pl-2">
                        <a href="{{ route('mantenance.services.goals', $service) }}">Metas del Servicio</a>
                    </li>

                    <li
                    class="leading-7 mb-1 border-l-4 @routeIs('mantenance.services.jobs', $service) border-indigo-400 @else border-transparent @endif pl-2">
                        <a href="{{ route('mantenance.services.jobs', $service) }}">Obreros</a>
                    </li>

                </ul>

                @switch($service->status)
                    @case(1)
                        <form action="{{ Route('mantenance.services.status', $service) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger mb-4" type="submit">Solicitar revisión</button>
                        </form>

                    @break
                    @case(2)
                        <div class="card text-gray-500">
                            <div class="crad-body">
                                Esta actividad se encuentra en revisión
                            </div>
                        </div>
                    @break
                    @case(3)
                    <div class="card text-gray-500">
                        <div class="crad-body">
                            Esta actividad se encuentra publicada
                        </div>
                    </div>

                    @break
                    @default

                @endswitch

                <form action="{{ Route('mantenance.services.status', $service) }}" method="POST">
                    @csrf
                    <button class="btn btn-danger mb-4" type="submit">Solicitar revisión</button>
                </form>
            </aside>

            <div class="col-span-4 card">
                <main class="card-body text-gray-600">
                    {{ $slot }}
                </main>
            </div>
        </div>

    </div>

    @stack('modals')

    @livewireScripts

</body>

</html>
