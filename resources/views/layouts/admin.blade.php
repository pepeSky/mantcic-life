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

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div>
        <div class="lg:grid lg:grid-cols-12">
            <!-- Page Heading -->
            @if (isset($header))
                <div class="">
                    <header class="bg-blue-500 shadow">
                        <div class="py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                </div>
            @endif

            <!-- Page Aside -->
            <aside class="bg-green-400 lg:min-h-screen col-span-3">
                {{ $slot }}
            </aside>

            <!-- Page Content -->
            <main class="bg-yellow-700 col-span-9 min-h-screen">
                {{ $main }}
            </main>

            <!-- Page Footer -->
            <footer class="bg-red-400 col-span-12">
                <span>Fotter</span>
            </footer>

            @stack('modals')

            @livewireScripts
        </div>
    </div>
</body>

</html>
