<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl">Crear una nueva categoría</h3>
                    <form action="{{ route('category.item.store', $category) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-5">
                            <x-ts-input name="name" label="Nombre" required/>
                        </div>
                        <div class="my-5">
                            <x-ts-input name="description" label="Descripción" required/>
                        </div>
                        <div class="my-5">
                            <x-ts-number name="price" step="5" label="Precio" />
                        </div>
                        <div class="rounded-md border border-gray-100 bg-white p-4 shadow-md mb-6">
                            <label for="upload" class="flex flex-col items-center gap-2 cursor-pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-white stroke-indigo-500" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                              </svg>
                              <span class="text-gray-600 font-medium">Subir Foto</span>
                            </label>
                            <input name="image" id="upload" type="file" class="hidden" required />
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