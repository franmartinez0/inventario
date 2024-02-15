<x-mi-layout>



    <x-slot name="titulo">
        Añadir localizacion de productos
    </x-slot>
    <x-slot name="nuevo">
    </x-slot>
    <div class="mx-auto max-w-md">
        <div class="mb-5">
            <label for="codigo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Codigo</label>
            <input type="text" name="codigo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $producto->codigo }}" placeholder="{{ $producto->codigo }}" />
        </div>
        <div class="mb-5">
            <label for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Modelo</label>
            <input type="text" name="modelo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $producto->modelo }}" placeholder="{{ $producto->modelo }}" required />
        </div>

        <div class="mb-5">
            <label for="fabricante"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Fabricante</label>
            <input type="text" name="fabricante"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $producto->fabricante }}" placeholder="{{ $producto->fabricante }}" required />
        </div>
        <div class="mb-5">
            <label for="descripcion"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Descripcion</label>
            <input type="text" name="descripcion"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $producto->descripcion }}" placeholder="{{ $producto->descripcion }}"required />
        </div>

        <div class="mb-5">
            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Stock</label>
            <input type="number" min="0" max="100" name="stock"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $producto->stock }}" placeholder="{{ $producto->stock }}" required />
        </div>





        <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Selecciona el
            estado</label>
        <select id="estado" name="estado"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="{{ $producto->estado }}">{{ $producto->estado }}</option>
            <option value="activo">Activo</option>
            <option value="roto">Roto</option>
            <option value="desaparecido">Desaparecido</option>
        </select>



        <form class="max-w-sm mx-auto" method="POST" action="/productos/addLocalizacion/{{ $producto->id }}"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-5">
                <label for="localizacion"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localizacion</label>
                <select name="localizacion" id="localizacion"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($localizacions as $localizacion)
                        <option value=" {{ $localizacion->id }} "> {{ $localizacion->ciudad }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">modificar
            </button>
        </form>
    </div>



</x-mi-layout>
