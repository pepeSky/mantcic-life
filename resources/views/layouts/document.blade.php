<div>
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
        <x-jet-banner />

        <div>

            <!-- Header -->
            <div class="fixed h-24 w-full z-50 flex justify-between bg-white">
                <div class="flex-shrink items-center flex justify-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block pl-2 h-9 w-auto" />
                    </a>
                    <span class="-ml-8 text-lg font-serif font-medium">ManTcic Life</span>
                </div>
                <div class="flex-shrink-0 flex items-center mr-10">
                    <input type="text" placeholder="Ingresa texto coincidencia" class="rounded-lg"> 
                    <x-buttons-border.success/>
                </div>
                <div class="flex-shrink-0 flex items-center mr-10">
                   <span class="text-lg font-serif font-medium">Herramientas</span>
                </div>
            </div>

            <!-- Aside -->
            <div class="fixed mt-24 w-64 inset-y-0 z-40 bg-green-300">Aside</div>

            <!-- Main -->
            <div class="pt-24 ml-64 h-full w-auto z-30">
                <div class="card bg-white py-3 px-5 rounded-xl flex flex-col mb-5">
                    <div class="title text-xl font-medium">Border</div>
                    <div class="w-full py-3">
                        <div class="inline-block mr-2 mt-2">
                           <button type="button" class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md border border-blue-600 hover:bg-blue-50">Primary</button>
                        </div>
                        <div class="inline-block mr-2 mt-2">
                           <button type="button" class="focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-md border border-gray-600 hover:bg-gray-50">Secondary</button>
                        </div>
                        <div class="inline-block mr-2 mt-2">
                           <button type="button" class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md border border-green-600 hover:bg-green-50">Success</button>
                        </div>
                        <div class="inline-block mr-2 mt-2">
                           <button type="button" class="focus:outline-none text-red-600 text-sm py-2.5 px-5 rounded-md border border-red-600 hover:bg-red-50">Danger</button>
                        </div>
                        <div class="inline-block mr-2 mt-2">
                           <button type="button" class="focus:outline-none text-yellow-600 text-sm py-2.5 px-5 rounded-md border border-yellow-600 hover:bg-yellow-50">Warning</button>
                        </div>
                        <div class="inline-block mr-2 mt-2">
                            <button type="button" class="focus:outline-none text-gray-800 text-sm py-2.5 px-5 rounded-md border border-gray-800 hover:bg-gray-200">Dark</button>
                        </div>
                    </div>
                </div>
            </div>

              <!-- Footer -->
              <div class="ml-64 h-28 w-auto bg-purple-500 ">Footer</div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>

</div>