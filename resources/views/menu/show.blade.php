<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <x-ts-card>
                <h3 class="text-xl m-4 text-center">{{ $menu->name }}</h3>
            </x-ts-card>
            <div class="mt-5"></div>
            <x-ts-card>
                <div class="flex justify-between">
                    <h3 class="text-xl m-3">Categorías</h3>
                    <x-ts-button icon="tag" class="mb-4 ml-3" href="{{ route('menu.category.add', $menu) }}">Agregar Categoría</x-ts-button>
                </div>
                <ul class="space-y-2">
                    @foreach ($menu->categories as $category)
                        <li>
                            <a href="{{ route('category.show', $category->id) }}"
                                class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                    <path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z"></path>
                                </svg>
                                <span class="ml-3">{{ $category->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </x-ts-card>
        </div>
    </div>
</x-app-layout>