<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl">Crear una nueva categoría</h3>
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="my-5">
                            <x-ts-input name="name" label="Nombre" hint="Inserte el nombre de la categoría" required/>
                        </div>
                        <div class="mb-5">
                            <label for="menus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Menú al que pertenece</label>
                            <select id="menus" name="menu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-ts-button type="submit" icon="plus-circle" position="right" md>Crear</x-ts-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>