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

        <div class="">
            <!-- Header -->
            <div class="fixed top-0  py-3 px-10 w-full flex justify-between bg-white" x-data="{}">
                <div class="flex justify-between w-96">
                    <div class="mx-4 lg:hidden" @click="$dispatch('toggle')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <div class="flex">
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

                </div>
                <div class="flex items-center hidden lg:inline-flex" x-show="open">
                    <div class="mr-5">
                        <input type="text" class="rounded-lg">
                        <x-buttons-border.success />
                    </div>
                    <div class="flex-shrink-0 flex items-center mr-10">
                        <span class="text-lg font-serif font-medium">Herramientas</span>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-12" x-data="{open: true}">
                <!-- Aside -->
                <div class="mt-12 overflow-y-auto fixed lg:static bg-green-400 h-80 min-h-screen lg:col-span-2 col-span-3" x-show="open"
                    x-on:toggle.window="open = !open">
                    <!-- Responsive Sponsors -->
                    <aside>
                        <div class="bg-yellow-700 w-80 h-60 lg:hidden">
                            <span>Sponsors</span>
                        </div>
                        <ul class="mt-12 px-4">
                            
                            <li class="nav-dropdown-container ecosystem">
                                <a class="nav-link">Ecosystem</a><span class="arrow"></span>
                                <ul class="nav-dropdown">
                                    <li>
                                        <h4>Help</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://forum.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Forum</a></li>
                                            <li><a href="https://chat.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Chat</a></li>
                                            <li><a href="https://events.vuejs.org/meetups/" class="nav-link"
                                                    target="_blank" rel="noopener">Meetups</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Tooling</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://github.com/vuejs/vue-devtools" class="nav-link"
                                                    target="_blank" rel="noopener">Devtools</a></li>
                                            <li><a href="https://cli.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue CLI</a></li>
                                            <li><a href="https://vue-loader.vuejs.org" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Loader</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Core Libraries</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://router.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Router</a></li>
                                            <li><a href="https://vuex.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vuex</a></li>
                                            <li><a href="https://ssr.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Server Renderer</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>News</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://news.vuejs.org" class="nav-link" target="_blank"
                                                    rel="noopener">Weekly News</a></li>
                                            <li><a href="https://github.com/vuejs/vue/projects/6" class="nav-link"
                                                    target="_blank" rel="noopener">Roadmap</a></li>
                                            <li><a href="https://events.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Events</a></li>
                                            <li><a href="https://twitter.com/vuejs" class="nav-link" target="_blank"
                                                    rel="noopener">Twitter</a></li>
                                            <li><a href="https://medium.com/the-vue-point" class="nav-link"
                                                    target="_blank" rel="noopener">Blog</a></li>
                                            <li><a href="https://vuejobs.com/?ref=vuejs" class="nav-link"
                                                    target="_blank" rel="noopener">Jobs</a></li>
                                            <li><a href="https://dev.to/t/vue" class="nav-link" target="_blank"
                                                    rel="noopener">DEV Community</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-dropdown-container ecosystem">
                                <a class="nav-link">Ecosystem</a><span class="arrow"></span>
                                <ul class="nav-dropdown">
                                    <li>
                                        <h4>Help</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://forum.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Forum</a></li>
                                            <li><a href="https://chat.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Chat</a></li>
                                            <li><a href="https://events.vuejs.org/meetups/" class="nav-link"
                                                    target="_blank" rel="noopener">Meetups</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Tooling</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://github.com/vuejs/vue-devtools" class="nav-link"
                                                    target="_blank" rel="noopener">Devtools</a></li>
                                            <li><a href="https://cli.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue CLI</a></li>
                                            <li><a href="https://vue-loader.vuejs.org" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Loader</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Core Libraries</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://router.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Router</a></li>
                                            <li><a href="https://vuex.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vuex</a></li>
                                            <li><a href="https://ssr.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Server Renderer</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>News</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://news.vuejs.org" class="nav-link" target="_blank"
                                                    rel="noopener">Weekly News</a></li>
                                            <li><a href="https://github.com/vuejs/vue/projects/6" class="nav-link"
                                                    target="_blank" rel="noopener">Roadmap</a></li>
                                            <li><a href="https://events.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Events</a></li>
                                            <li><a href="https://twitter.com/vuejs" class="nav-link" target="_blank"
                                                    rel="noopener">Twitter</a></li>
                                            <li><a href="https://medium.com/the-vue-point" class="nav-link"
                                                    target="_blank" rel="noopener">Blog</a></li>
                                            <li><a href="https://vuejobs.com/?ref=vuejs" class="nav-link"
                                                    target="_blank" rel="noopener">Jobs</a></li>
                                            <li><a href="https://dev.to/t/vue" class="nav-link" target="_blank"
                                                    rel="noopener">DEV Community</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-dropdown-container ecosystem">
                                <a class="nav-link">Ecosystem</a><span class="arrow"></span>
                                <ul class="nav-dropdown">
                                    <li>
                                        <h4>Help</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://forum.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Forum</a></li>
                                            <li><a href="https://chat.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Chat</a></li>
                                            <li><a href="https://events.vuejs.org/meetups/" class="nav-link"
                                                    target="_blank" rel="noopener">Meetups</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Tooling</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://github.com/vuejs/vue-devtools" class="nav-link"
                                                    target="_blank" rel="noopener">Devtools</a></li>
                                            <li><a href="https://cli.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue CLI</a></li>
                                            <li><a href="https://vue-loader.vuejs.org" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Loader</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Core Libraries</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://router.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Router</a></li>
                                            <li><a href="https://vuex.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vuex</a></li>
                                            <li><a href="https://ssr.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Vue Server Renderer</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>News</h4>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="https://news.vuejs.org" class="nav-link" target="_blank"
                                                    rel="noopener">Weekly News</a></li>
                                            <li><a href="https://github.com/vuejs/vue/projects/6" class="nav-link"
                                                    target="_blank" rel="noopener">Roadmap</a></li>
                                            <li><a href="https://events.vuejs.org/" class="nav-link" target="_blank"
                                                    rel="noopener">Events</a></li>
                                            <li><a href="https://twitter.com/vuejs" class="nav-link" target="_blank"
                                                    rel="noopener">Twitter</a></li>
                                            <li><a href="https://medium.com/the-vue-point" class="nav-link"
                                                    target="_blank" rel="noopener">Blog</a></li>
                                            <li><a href="https://vuejobs.com/?ref=vuejs" class="nav-link"
                                                    target="_blank" rel="noopener">Jobs</a></li>
                                            <li><a href="https://dev.to/t/vue" class="nav-link" target="_blank"
                                                    rel="noopener">DEV Community</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>

                <!-- Main -->
                <div class="mt-12 py-1 col-span-12 lg:col-span-8 overflow-y-auto sm:overflow-y-auto">
                    <div class="card bg-white py-3 px-5 flex flex-col mb-5">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu eros sapien. Curabitur vel
                            est ipsum. Nulla fermentum posuere rutrum. Curabitur rhoncus ut velit vel feugiat. Mauris id
                            sapien urna. Cras convallis enim ex, et commodo purus sagittis ac. Curabitur vel ante ut
                            arcu pellentesque aliquam nec sed nibh. Sed tellus erat, dapibus ac suscipit ut, condimentum
                            ut erat.

                            Integer feugiat eleifend porttitor. Quisque quis hendrerit metus. Etiam pellentesque
                            malesuada porttitor. Suspendisse eu sagittis tortor. Vestibulum a nunc eu tellus finibus
                            viverra sit amet a neque. Praesent in fringilla neque, posuere sodales tellus. Ut tristique
                            commodo pulvinar. Fusce tristique purus eget sem facilisis, vel efficitur purus euismod.
                            Donec ornare, metus in sollicitudin tincidunt, lacus lectus pharetra ex, in dictum velit
                            ligula non nibh. Nullam convallis erat eu turpis tempor, nec porttitor massa molestie. Sed
                            odio massa, mollis nec tincidunt nec, pellentesque at leo. Quisque magna est, varius sit
                            amet mattis ac, hendrerit vitae mi. Vestibulum iaculis suscipit ex sed blandit. Vivamus sit
                            amet maximus tortor. Integer et mollis lacus.

                            Duis lacus lacus, mollis ut enim et, tincidunt molestie lorem. Mauris at consequat nunc,
                            vitae viverra tellus. Ut congue ut nisi vel lacinia. Proin laoreet sed mi ut pharetra. Nam
                            blandit facilisis massa, in elementum lacus. Donec eleifend eros tortor, vel faucibus lectus
                            molestie ac. Phasellus ut lorem a turpis tincidunt ultricies. Maecenas ac facilisis lorem,
                            non ornare magna.

                            Fusce efficitur iaculis enim. Nullam aliquam ipsum commodo ex hendrerit maximus. Praesent
                            tincidunt, risus sodales fringilla volutpat, tortor leo maximus tellus, sit amet cursus
                            nulla ipsum vitae quam. Duis sit amet erat maximus, vestibulum nulla eget, volutpat neque.
                            Maecenas quis metus imperdiet, fringilla tortor sed, posuere magna. Integer tristique at
                            lorem ac eleifend. Donec scelerisque nisl at interdum mattis. Morbi tempus ultrices turpis
                            at gravida. Phasellus rhoncus justo ac felis vehicula, vitae fermentum leo lobortis. Sed non
                            nulla velit. Sed condimentum nibh sed metus scelerisque, vel lobortis lorem viverra. Quisque
                            convallis mi erat, non suscipit lorem semper convallis. In dignissim mi id neque cursus
                            sodales. Pellentesque luctus magna urna, non porttitor leo scelerisque ac. Curabitur tempor
                            risus massa, id venenatis tellus dictum a.

                            Integer vestibulum ligula eget maximus lacinia. Curabitur elit dolor, facilisis nec
                            condimentum eget, pellentesque hendrerit nisl. Donec fringilla mattis turpis quis faucibus.
                            Integer at mi tortor. Curabitur felis augue, condimentum eget lorem sit amet, pellentesque
                            ullamcorper quam. Donec sollicitudin molestie scelerisque. Nam imperdiet, dolor at feugiat
                            scelerisque, nunc ipsum elementum neque, nec vestibulum orci dui a arcu. Mauris sapien
                            lectus, pharetra vel scelerisque ac, pulvinar eget sapien</span>
                    </div>
                </div>

        
                <!-- Sponsor -->
                <div class="bg-yellow-700 w-80 min-h-screen cols-span-2 lg:block hidden">
                    <span>Sponsors</span>
                </div>

            </div>

       
        </div>

        @stack('modals')

        @livewireScripts
    </body>

    </html>

</div>
