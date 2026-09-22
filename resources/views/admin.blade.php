<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <div class="-mt-4">
                <x-application-mark/>
            </div>
        <h2 class="m-5 py-2 font-semibold text-xl align-middle text-gray-800 leading-tight">
            manTcic Life - "Manteniendo el ciclo de Vida"
        </h2>
        </div>
    </x-slot>

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
