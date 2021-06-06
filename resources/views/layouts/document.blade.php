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

    <body class="font-sans antialiased relative">
        <x-jet-banner />

        <div>
            <!-- Header -->
            <div class="fixed top-0 py-3 px-10 w-full flex justify-between bg-white">
                <div class="items-center flex justify-center">
                    <a href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </a>
                    <span class="text-lg font-serif font-medium">ManTcic Life</span>
                </div>
                <div class="flex-shrink-0 flex items-center">
                    <div class="mr-5">
                        <input type="text" class="rounded-lg">
                        <x-buttons-border.success />
                    </div>
                    <div class="flex-shrink-0 flex items-center mr-10">
                        <span class="text-lg font-serif font-medium">Herramientas</span>
                    </div>
                </div>

            </div>

            <div class="flex justify-between">
                <!-- Aside -->
                <div class="fixed mt-24 min-h-screen w-64 bg-green-300">
                    <ul>
                        <li>Hello world</li>
                    </ul>
                </div>

                <!-- Main -->
                <div class="-left-1/2 left-50 pt-24 min-h-screen">
                    <div class="card bg-white py-3 px-5 rounded-xl flex flex-col mb-5">
                        <div class="title text-xl font-medium">Border</div>
                        <div class="w-full py-3">
                            <div class="inline-block mr-2 mt-2">
                                <button type="button"
                                    class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md border border-blue-600 hover:bg-blue-50">Primary</button>
                            </div>
                            <div class="inline-block mr-2 mt-2">
                                <button type="button"
                                    class="focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-md border border-gray-600 hover:bg-gray-50">Secondary</button>
                            </div>
                            <div class="inline-block mr-2 mt-2">
                                <button type="button"
                                    class="focus:outline-none text-green-600 text-sm py-2.5 px-5 rounded-md border border-green-600 hover:bg-green-50">Success</button>
                            </div>
                            <div class="inline-block mr-2 mt-2">
                                <button type="button"
                                    class="focus:outline-none text-red-600 text-sm py-2.5 px-5 rounded-md border border-red-600 hover:bg-red-50">Danger</button>
                            </div>
                            <div class="inline-block mr-2 mt-2">
                                <button type="button"
                                    class="focus:outline-none text-yellow-600 text-sm py-2.5 px-5 rounded-md border border-yellow-600 hover:bg-yellow-50">Warning</button>
                            </div>
                            <div class="inline-block mr-2 mt-2">
                                <button type="button"
                                    class="focus:outline-none text-gray-800 text-sm py-2.5 px-5 rounded-md border border-gray-800 hover:bg-gray-200">Dark</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-yellow-700 w-80">
                    <span>Sponsors</span>
                </div>

            </div>

            <!-- Footer -->
            <div class="h-28 w-full bg-purple-500 ">Footer</div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>

    </html>

</div>
