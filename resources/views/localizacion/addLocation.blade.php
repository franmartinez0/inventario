<x-mi-layout>



    <x-slot name="titulo">
        Añadir localizacion nueva
    </x-slot>
    <x-slot name="nuevo">
    </x-slot>

    <form class="max-w-sm mx-auto" method="POST" action="{{ route('localizacions.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="nombre_edificio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre
                del
                edificio</label>
            <input type="text" name="nombre_edificio"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="nombre del edificio" required />
        </div>
        <div class="mb-5">
            <label for="direccion_edificio"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Direccion del edificio</label>
            <input type="text" name="direccion_edificio"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="direccion del edificio" required />
        </div>
        <div class="mb-5">
            <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Direccion del
                edificio</label>
            <input type="text" name="ciudad"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ciudad" required />
        </div>

        <button type="submit"
            class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">enviar</button>
    </form>


</x-mi-layout>
