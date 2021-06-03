<div>
    <div class="h-auto bg-white">
        <div class="flex items-center justify-center mt-5">

            <img class="ml-4 h-6" src="https://premium-tailwindcomponents.netlify.app/assets/svg/tailwindcomponent-dark.svg">

            <div class="mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            </div>
        </div>

        <nav class="mt-3">
            <ul>
                <li class="px-5 py-3">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-500">Paginas Web</div>
                    </div>
                </li>

                {{-- Panel Control --}}
                <li>
                    <a href="{{ route('admin.home') }}"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Panel Control</span>
                    </a>
                </li>

                {{-- Blog --}}
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 5c7.18 0 13 5.82 13 13M6 11a7 7 0 017 7m-6 0a1 1 0 11-2 0 1 1 0 012 0z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Blog</span>
                    </a>
                </li>

                {{-- Documentación --}}
                <li>
                    <a href="{{ route('documents.home') }}"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Documentación</span>
                    </a>
                </li>
            </ul>

            {{-- Gestión Activos Físicos --}}
            <div class="px-5 py-3">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Gestión Activos Físicos</div>
                </div>
            </div>

            {{-- Variables --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="inline-flex justify-center items-start">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Variables</span>
                    </span>


                    <span class="float-right">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Factores Macro</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Factores Micro</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Factores Politicos</a>
                </div>
            </div>

            {{-- Constantes --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="inline-flex justify-center items-start">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.871 4A17.926 17.926 0 003 12c0 2.874.673 5.59 1.871 8m14.13 0a17.926 17.926 0 001.87-8c0-2.874-.673-5.59-1.87-8M9 9h1.246a1 1 0 01.961.725l1.586 5.55a1 1 0 00.961.725H15m1-7h-.08a2 2 0 00-1.519.698L9.6 15.302A2 2 0 018.08 16H8">
                            </path>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Constantes</span>
                    </span>

                    <span class="float-right">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Ciencias</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Ramas</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Sectores</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Categorías</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Subcategorías</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Etiquetas</a>
                </div>
            </div>

            {{-- Gestión --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="inline-flex justify-center items-start">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                            </path>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Gestión</span>
                    </span>

                    <span class="float-right">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Recursos</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Planificación</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Actividades</a>
                </div>
            </div>

            {{-- Contabilidad --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="inline-flex justify-center items-start">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Contabilidad</span>
                    </span>

                    <span class="float-right">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Libros
                        Diarios</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white" href="#">Libros
                        Mayores</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Banlaces</a>
                </div>
            </div>

            {{-- Mantenimiento --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                        <span class="ml-2 text-sm tracking-wide truncate">Mantenimiento</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Activos Físicos</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Bitacoras</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Tareas</a>
                </div>
            </div>

            {{-- Almacén --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>

                        <span class="ml-2 text-sm tracking-wide truncate">Almacén</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Artículos</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Movimientos</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Inventarios</a>
                </div>
            </div>

            {{-- Ventas --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <span class="ml-2 text-sm tracking-wide truncate">Ventas</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Solicitudes</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Presupuestos</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Campañas</a>
                </div>
            </div>

            {{-- Diseño --}}
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-start py-3 px-6 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500">
                    <span class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z">
                            </path>
                        </svg>

                        <span class="ml-2 text-sm tracking-wide truncate">Diseño</span>
                    </span>

                    <span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div x-show="open" class="bg-gray-100">
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Elementos UI</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Instalaciones y Equipos</a>
                    <a class="py-2 px-16 block text-sm text-gray-600 hover:bg-blue-500 hover:text-white"
                        href="#">Contenedores</a>
                </div>
            </div>

            <div class="px-5 py-3">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Administración Cuenta</div>
                </div>
            </div>
            <ul>
                <li>
                    <a href="{{ route('profile.show') }}"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Mi Perfíl</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Hoja Vida</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}"
                        class="relative flex flex-row items-center h-11 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        @csrf
                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" class="h-11 w-full z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <a class="absolute ml-12 text-sm tracking-wide truncate">Cerrar Sesión</a>
                        </x-jet-dropdown-link>
                    </form>

                </li>
            </ul>

        </nav>

        <div class="relative bottom-0 my-8">
            <a class="flex items-center py-2 px-8 text-gray-700 hover:text-gray-600" href="#">
                <img class="h-6 w-6 rounded-full mr-3 object-cover"
                    src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g"
                    alt="avatar">
                <span>Khatabwedaa</span>
            </a>
        </div>
    </div>
</div>
