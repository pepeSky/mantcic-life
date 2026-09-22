@php
$nav_links = [
    [
        'name' => 'Bienvenido',
        'route' => route('welcome'),
        'active' => request()->routeIs('welcome'),
    ],

    [
        'name' => 'Servicios',
        'route' => route('services.index'),
        'active' => request()->routeIs('services.*'),
    ],

    [
        'name' => 'Almacén',
        'route' => route('stores.index'),
        'active' => request()->routeIs('stores.*'),
    ],

    [
        'name' => 'Documentación',
        'route' => route('documents.home'),
        'active' => request()->routeIs('documents.home'),
    ],

    [
        'name' => 'Contáctanos',
        'route' => route('contact.index'),
        'active' => request()->routeIs('contact.*'),
    ],
];

@endphp
<div>
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow">
        <!-- Primary Navigation Menu -->
        <div class="container">
            <div class="flex justify-between h-20 my-2">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 -mt-4 flex items-center">
                        <a href="{{ route('welcome') }}">
                            <x-application-mark />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        @foreach ($nav_links as $nav_link)
                            <x-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                                {{ __($nav_link['name']) }}
                            </x-nav-link>
                        @endforeach
                    </div>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                            <x-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            {{ Auth::user()->currentTeam->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>

                                        <!-- Team Settings -->
                                        <x-dropdown-link
                                            href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-dropdown-link>
                                        @endcan

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif

                    <!-- Settings Dropdown -->
                    <div class="flex justify-between h-20 my-2">
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition h-20">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">

                                    <!-- Proyect Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Administración Proyecto') }}
                                    </div>

                                    @can('Leer Servicios')
                                        <x-dropdown-link href="{{ route('mantenance.services.index') }}">
                                            {{ __('Mantenimiento') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <x-dropdown-link href="{{ route('documents.home') }}">
                                        {{ __('Documentación') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('admin.home') }}">
                                        {{ __('Panel Control') }}
                                    </x-dropdown-link>

                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Administración Cuenta') }}
                                    </div>

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Mi Perfil') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('documents.home') }}">
                                        {{ __('Ciclo Vida') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link href="{{ route('documents.home') }}">
                                        {{ __('Herramientas') }}
                                    </x-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>

                        @else
                            <x-nav-link class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ml-3"
                                href="{{ route('login') }}" :active="request()->routeIs('login')">
                                {{ __('Comienza...') }}
                            </x-nav-link>

                            <x-nav-link class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ml-3"
                                href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Incorporate...') }}
                            </x-nav-link>

                        @endauth
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                @foreach ($nav_links as $nav_link)
                    <x-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                        {{ __($nav_link['name']) }}
                    </x-responsive-nav-link>
                @endforeach

            </div>

            <!-- Responsive Settings Options -->
            @auth
                <div class="pt-4 pb-1 border-t border-gray-200">

                    <div class="mt-1 space-y-1">

                        <!-- Proyect Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Administración Proyecto') }}
                        </div>

                        <!-- Account Management -->
                        @can('Leer Servicios')
                            <x-responsive-nav-link href="{{ route('mantenance.services.index') }}"
                                :active="request()->routeIs('mantenance.services.index')">
                                {{ __('Mantenimiento') }}
                            </x-responsive-nav-link>
                        @endcan
                        <x-responsive-nav-link href="{{ route('documents.home') }}"
                            :active="request()->routeIs('documents.home')">
                            {{ __('Documentación') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('profile.show') }}"
                            :active="request()->routeIs('profile.show')">
                            {{ __('Panel Control') }}
                        </x-responsive-nav-link>

                        <!-- Account Management -->
                        <div class="mt-3 block px-4 py-2 text-xs text-gray-400">
                            {{ __('Administración Cuenta') }}
                        </div>
                        <div class="mt-1 flex items-center px-4">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="flex-shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif

                            <div>
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                        <x-responsive-nav-link href="{{ route('profile.show') }}"
                            :active="request()->routeIs('profile.show')">
                            {{ __('Mi Perfil') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('profile.show') }}"
                            :active="request()->routeIs('profile.show')">
                            {{ __('Ciclo Vida') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('profile.show') }}"
                            :active="request()->routeIs('profile.show')">
                            {{ __('Herramientas') }}
                        </x-responsive-nav-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-responsive-nav-link>
                        </form>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                :active="request()->routeIs('teams.show')">
                                {{ __('Team Settings') }}
                            </x-responsive-nav-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-responsive-nav-link href="{{ route('teams.create') }}"
                                    :active="request()->routeIs('teams.create')">
                                    {{ __('Create New Team') }}
                                </x-responsive-nav-link>
                            @endcan

                            <div class="border-t border-gray-200"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="jet-responsive-nav-link" />
                            @endforeach
                        @endif
                    </div>
                </div>
            @else
                <div class=" py-1 border-t border-gray-200">
                    <x-responsive-nav-link href="{{ route('login') }}">
                        Empieza...
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('register') }}">
                        Incorporate...
                    </x-responsive-nav-link>
                </div>
            @endauth
        </div>
    </nav>
</div>
