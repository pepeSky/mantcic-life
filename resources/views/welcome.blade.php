<x-guest-layout>

        <div class="py-12">
               {{-- Portada--}}
    <section class="bg-cover" style="background-image: url({{ asset('img/dashboard/banner-principal2.jpeg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 text-white">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="pt-6 text-black font-bold text-4xl">Gestionando Ciclos de Vida</h1>
                <p class="pt-6 text-black text-lg mt-2">Gestionar tus activos y tu ciclo de vida te ayudara a poder concretar esos planes que siempre deseaste</p>

                <!-- component -->
                <!-- This is an example component -->
                <!--livewire('search')-->
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="h-36 w-full object-cover rounded-xl" src="{{ asset('img/dashboard/contenido-1.jpg') }}"
                        alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo Web</h1>
                    <p class="text-sm text-gray-700">Revisa tu puerta de conexión y potencia tu comunicación e interacción con el mundo para alcanzar tu sueño...</p>
                </header>
            </article>

            <article>
                <figure>
                    <img class="h-36 w-full object-cover rounded-xl" src="{{ asset('img/dashboard/contenido-2.jpg') }}"
                        alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Módulos Soporte</h1>
                    <p class="text-sm text-gray-700">Busca o revisa los modulos de apoyo y/o conexión disponibles, para la automatización de tu proceso...</p>
                </header>
            </article>

            <article>
                <figure>
                    <img class="h-36 w-full object-cover rounded-xl" src="{{ asset('img/dashboard/contenido-3.jpg') }}"
                        alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Gestión del Ciclo</h1>
                    <p class="text-sm text-gray-700">Controla el avance de tu metas y objetivos para cumplir tu planificación personal, y disfruta de la vida...</p>
                </header>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/dashboard/contenido-4.jpg') }}"
                        alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo Individual</h1>
                    <p class="text-sm text-gray-700">Ocurre algo con tu persona y necesitas ayuda, buscanos para dar solución a eso que te impide continuar ...</p>
                </header>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes por donde iniciar?</h1>
        <p class=" text-center text-white"> Dirigete al olimpo en donde podras encontrar tus sugerencias</p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('services.index') }}"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Catalogo
                Servicios
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600 ">ULTIMOS SERVICIOS</h1>
        <P class="text-center text-gray-500 text-sm mb-6">Le Ponemos weno para que todo resulte pulento</P>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($services as $service)
                <x-service-card :service="$service"/>
                @endforeach
        </div>
    </section>
        </div>


</x-guest-layout>
