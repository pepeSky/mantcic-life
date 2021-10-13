<x-mantenance-layout :service="$service">
    <div>
        @livewire('worker.services-goals', ['service' => $service], key('services-goals' . $service->id))
    </div>

    <div class="my-4">
        @livewire('worker.services-requirements', ['service' => $service], key('services-requirements' .$service->id))
    </div>

    <div>
        @livewire('worker.services-audiences', ['service' => $service], key('services-audiences' . $service->id))
    </div>


</x-mantenance-layout>
