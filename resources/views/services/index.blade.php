<x-guest-layout>
    <div>

        @livewire('welcome-header')
 
        <div class="py-12">
            <section class="bg-cover" style="background-image: url({{ asset('img/dashboard/servicios-2.jpeg') }})">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-24  text-white">
                    <div class="w-full md:w-3/4 lg:w-1/2">
                        <h1 class="pt-16 text-gray-800 font-bold text-4xl">Servicios Ultima Generación</h1>
                        <p class="pt-6 text-black text-lg mt-2">Servicios para el desarrollo optimo de tus actividades y mantener el control de tu ciclo de vida.</p>
        
                        <!-- component -->
                        <!-- This is an example component -->
                        @livewire('search')
                    </div>
                </div>
            </section>

            @livewire('services-index')
            
        </div>

    </div>

</x-guest-layout>