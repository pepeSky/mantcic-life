<div class="container py-8">

    <x-table-responsive>
        <div class="flex px-6 py-4">

            <input wire:keydown="cleanPage" wire:model="search" class="form-input flex-1 shadow-sm h-10 rounded-md"
                placeholder=" Ingrese el nombre de una unidad" />

            <a class="ml-2 btn btn-danger" href="{{ route('mantenance.units.create') }}">Crear Nueva Unidad</a>
        </div>



            <table class="min-w-full divide-y divide-gray-200">

                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre Unidad
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Codigo Unidad
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            KPI
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



                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @isset($record)
                                            <img class="h-10 w-10 rounded-full object-cover object-center" src="" alt="">
                                        @else
                                            <img class="h-10 w-10 rounded-full object-cover object-center"
                                                src="https://cdn.pixabay.com/photo/2014/11/01/17/51/locomotive-512509__340.jpg"
                                                alt="">
                                        @endisset
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Comunidad Edificio Bicentenario
                                        </div>
                                        <div class="text-sm text-gray-500">
                                          Mant: Jose Fernando Riquelme Vergara
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">UnSe 2.001</div>
                                <div class="text-sm text-gray-500">3 Unidades Soporte</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 flex items-center">

                                    <ul class="flex text-sm ml-2">
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i
                                                class="fas fa-star "></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-sm text-gray-500">KPI</div>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap">



                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Falla
                                        </span>


                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Mantenimiento
                                        </span>


                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Operacion
                                        </span>





                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href=""
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>



                    <!-- More people... -->
                </tbody>
            </table>

            <div class="px-6 py-4">

            </div>


            <div class="px-6 py-4">
                <strong>No hay registros que coincidan...</strong>
            </div>

    </x-table-responsive>

</div>

