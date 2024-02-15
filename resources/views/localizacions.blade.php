<x-mi-layout>

    <x-slot name="nuevo">
        {{ route('localizacions.create') }}
    </x-slot>

    <x-slot name="titulo">
        Localizaciones
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ciudad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edificio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Direccion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($localizacions as $localizacion)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $localizacion->ciudad }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $localizacion->nombre_edificio }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $localizacion->direccion_edificio }}
                        </td>

                        <td class="px-6 py-4 text-right">
                            <a href="/localizacions/{{ $localizacion->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                    class="zmdi zmdi-label"></i></a>

                            <a href="/localizacions/delete/{{ $localizacion->id }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                    class="zmdi zmdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-mi-layout>
