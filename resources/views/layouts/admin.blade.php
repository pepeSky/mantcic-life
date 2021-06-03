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
    <div class="container">
        <div class="grid grid-cols-12">
        <!-- Page Heading -->
        @if (isset($header))
            <div class="grid-rows-1 w-full">
                <header class="bg-blue-500 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            </div>
        @endif

        <!-- Page Aside -->
        <aside class="inline-block overflow-auto bg-green-400">
            {{ $slot }}
        </aside>

        <!-- Page Content -->
        <main class="absolute w-max inline-block ml-4 bg-yellow-700">
            {{ $main }}
        </main>

        <!-- Page Footer -->
        <footer class="bg-red-400">

        </footer>

        @stack('modals')

        @livewireScripts
    </div>
    </div>
</body>

</html>
