<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl">Crear un nuevo Menú</h3>
                    <form action="{{ route('menu.store') }}" method="POST">
                        @csrf
                        <div class="my-5">
                            <x-ts-input name="name" label="Nombre" hint="Inserte el nombre del Menú" />
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