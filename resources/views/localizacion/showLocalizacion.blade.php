<x-mi-layout>



    <x-slot name="titulo">
        Detalle de Localizacion
    </x-slot>
    <x-slot name="nuevo">

    </x-slot>

    <a
        class="block mt-4 mx-auto w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $localizacion->nombre_edificio }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Ciudad: {{ $localizacion->ciudad }}</p>

        <p class="font-normal text-gray-700 dark:text-gray-400">Localizacion del edificio:
            {{ $localizacion->direccion_edificio }}</p>
    </a>



</x-mi-layout>
