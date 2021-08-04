<div class="mt-8">

    <div class="container grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="embed-responsive">
                {$current->iframe}
            </div>
            <h1 class="text-3xl text-gray-600 font-bold mt-4">{{-- $current->name --}}</h1>
            {{-- @if ($current->description)
                <div class="text-gray-600">{{--$current->description->name --}}
        </div>
        {{-- @endif --}}
        <div class="flex items-center mt-4">
            <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
            <p class="text-sm ml-2 cursor-pointer">Marcar actividad como completada</p>
        </div>

        <div class="card mt-2">
            <div class="flex card-body tex-gray-500 font-bold">
                @if ($this->current)
                    <a wire:click="changeActivity({{ $this->previous }})" class="cursor pointer ">Tema Anterior</a>
                @endif

                @if ($this->current)
                    <a wire:click="changeActivity({{ $this->next }})" class="ml-auto cursor-pointer ">Siguiente
                        Tema</a>
                @endif
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h1 class="text-2xl leading-8 text-center mb-4">{{ $service->title }}</h1>
            <div class="flex items-center">
                <figure>
                    <img class="w-12 h-12 object-cover rounded-full mr-4"
                        src="{{ $service->worker->profile_photo_url }}" alt="">
                </figure>

                <div>
                    <p>{{ $service->worker->name }}</p>
                    <a class="text-blue-500 text-sm"
                        href="">{{ '@' . Str::slug($service->worker->name, '') }}</a>
                </div>
            </div>
            <p clas="text-gray-600 text-sm mt-2">20% Completado</p>
            <div class="relative pt-1">
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                    <div style="width:30%"
                        class="shadow-none flex flex-col text-center whitespace-nowrap text-white just bg-green-500">
                    </div>
                </div>
            </div>

            <ul>
                @foreach ($service->modules as $module)
                    <li class="text-gray-600 mb-4">
                        <a class="text-bold taxt-base inline-block mb-2" href="">{{ $module->name }}</a>
                        <ul>
                            @foreach ($module->activities as $activity)
                                <li class="flex mb-1">
                                    <div>
                                        @if ($activity->completed)
                                            @if ($current->id == $activity->id)
                                                <span
                                                    class="inline-block w-4 h-4 border-2 border-yellow-500 rounded-full mr-2 mt-1"></span>
                                            @else
                                                <span
                                                    class="inline-block w-4 h-4 bg-yellow-500 rounded-full mr-2 mt-1"></span>
                                            @endif
                                        @else
                                            @if ($current->id == $activity->id)
                                            <span
                                            class="inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                            @else
                                            <span
                                            class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                            @endif
                                        @endif
                                    </div>
                                    <a class="cursor-pointer" wire:click="changeActivity({{ $activity }})">
                                        {{ $activity->id }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>


</div>
