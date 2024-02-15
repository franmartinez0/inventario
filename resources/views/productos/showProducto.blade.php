<x-mi-layout>



    <x-slot name="titulo">
        Detalle de productos
    </x-slot>
    <x-slot name="nuevo">

    </x-slot>

    <a
        class="block mt-4 mx-auto w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $producto->modelo }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Codigo: {{ $producto->codigo }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Fabricante: {{ $producto->fabricante }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Descripcion: {{ $producto->descripcion }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Stock: {{ $producto->stock }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Estado: {{ $producto->estado }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">Id Localizacion: {{ $producto->localizacion_id }}</p>
    </a>



</x-mi-layout>
