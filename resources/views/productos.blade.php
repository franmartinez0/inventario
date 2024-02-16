<x-mi-layout>


    <x-slot name="nuevo">
        {{ route('productos.create') }}
    </x-slot>
    <x-slot name="titulo">
        Productos
    </x-slot>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Codigo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Modelo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fabricante
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        imagen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Localizaciones
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($productos->isEmpty())
                    <p class="text-white">No se encontraron resultados.</p>
                @else
                    @foreach ($productos as $producto)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $producto->codigo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $producto->modelo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $producto->fabricante }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $producto->descripcion }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $producto->stock }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $producto->estado }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/producto_' . $producto->id . '.jpg') }}">

                            </td>
                            <td class="px-6 py-4">
                                <a
                                    href="/localizacions/{{ $producto->localizacion_id }}"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Mostrar</a>
                                <a
                                    href="/productos/showProductoLocalizacion/{{ $producto->localizacion_id }}"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Añadir</a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="/productos/{{ $producto->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver </a>

                                <a href="/productos/delete/{{ $producto->id }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar
                                </a>
                                <a href="/productos/{{ $producto->id }}/edit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $productos->links() }}
    </div>


</x-mi-layout>
