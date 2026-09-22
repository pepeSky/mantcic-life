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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-1 w-screen">

            <x-banner/>
            
            <!-- Page Heading -->
            @if (isset($header))
                <div class="shadow col-span-1 md:col-span-2 lg:col-span-4 xl:col-span-5 h-24">
                    <header class="static bg-white w-full">
                        <div>
                            {{$header}}
                        </div>
                    </header>
                </div>
            @endif

            <!-- Page Aside -->
            <aside class="bg-green-400 col-span-1 lg:col-span-1 xl:col-span-1">
                {{ $slot }}
            </aside>

            <!-- Page Content -->
            <main class="bg-yellow-700 sm:col-span-1 lg:col-span-3 xl:col-span-4">
                {{ $main }}
            </main>

            <!-- Page Footer -->
            <footer class=" bg-red-100 w-full h-20 bottom-0 sm:col-span-1 md:col-span-2 lg:col-span-4 xl:col-span-5">
                <span>Footer</span>
            </footer>


            @stack('modals')

            @livewireScripts
        </div>
    </div>
</body>

</html>
