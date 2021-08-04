<div class="container py-8">

    <x-table-responsive>
        <div class="flex px-6 py-4">

            <input wire:keydown="cleanPage" wire:model="search" class="form-input flex-1 shadow-sm h-10 rounded-md"
                placeholder="Ingrese el nombre de un servicio" />

            <a class="ml-2 btn btn-danger" href="{{ route('mantenance.services.create') }}">Crear Nuevo Servicio</a>
        </div>

        @if ($services->count())

            <table class="min-w-full divide-y divide-gray-200">

                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Matriculados
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Calificación
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($services as $service)

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @isset($record)
                                            <img class="h-10 w-10 rounded-full object-cover object-center" src={{ Storage::url($service->image->url) }} alt="">
                                        @else
                                            <img class="h-10 w-10 rounded-full object-cover object-center"
                                                src="https://images.pexels.com/photos/4488651/pexels-photo-4488651.jpeg?cs=srgb&dl=pexels-cottonbro-4488651.jpg&fm=jpg"
                                                alt="">
                                        @endisset
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $service->title }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{-- $service->category->name --}}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $service->jobs->count() }}</div>
                                <div class="text-sm text-gray-500">Obreros Contratados</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 flex items-center">
                                    {{ $service->rating }}
                                    <ul class="flex text-sm ml-2">
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star text-{{ $service->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star text-{{ $service->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star text-{{ $service->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star text-{{ $service->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star text-{{ $service->rating >= 5 ? 'yellow' : 'gray' }}-400"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-sm text-gray-500">Valoración del Servicio</div>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap">

                                @switch($service->status)
                                    @case(1)
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Borrador
                                        </span>
                                    @break
                                    @case(2)
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Revisión
                                        </span>
                                    @break
                                    @case(3)
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Publicado
                                        </span>
                                    @break
                                    @default

                                @endswitch

                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('mantenance.services.edit', $service) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>

                    @endforeach

                    <!-- More people... -->
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{ $services->links() }}
            </div>
        @else

            <div class="px-6 py-4">
                <strong>No hay registros que coincidan...</strong>
            </div>
        @endif
    </x-table-responsive>

</div>
