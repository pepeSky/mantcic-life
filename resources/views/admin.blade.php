<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            manTcic Life - "Manteniendo el ciclo de Vida"
        </h2>
    </x-slot> --}}

    <div>
        <div>
            <div class="bg-white shadow-xl sm:rounded-lg">
                @livewire('admin-menu')
            </div>
        </div>
    </div>

    <x-slot name="main">
        <div class="bg-white w-full lg:w-3/4 lg:mx-auto shadow-xl sm:rounded-lg">
                @livewire("admin-main")
        </div>
    </x-slot>

</x-admin-layout>
