<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <x-ts-card>
                <h3 class="text-xl m-4 text-center">{{ $category->name }}</h3>
            </x-ts-card>
            <div class="my-5"></div>
            <x-ts-card>
                <div class="flex justify-between">
                    <h3 class="text-xl m-3">Artículos</h3>
                    <x-ts-button icon="tag" class="mb-4 ml-3" href="{{ route('category.item.add', $category) }}">Agregar Artículo</x-ts-button>
                </div>
                <table class="w-full text-left table-auto min-w-max">
                    <thead>
                    <tr class="border-b border-slate-300 bg-slate-50">
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Producto</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Nombre</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Descripción</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Precio</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($category->items()->get() as $item)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 border-b border-slate-200 py-5">
                                <img src="{{ Storage::url($item->image) }}" class="w-16 h-16 object-cover rounded" />
                                </td>
                                <td class="p-4 border-b border-slate-200 py-5">
                                <p class="block font-semibold text-sm text-slate-800">{{ $item->name }}</p>
                                </td>
                                <td class="p-4 border-b border-slate-200 py-5">
                                <p class="text-sm text-slate-500">{{ $item->description }}</p>
                                </td>
                                <td class="p-4 border-b border-slate-200 py-5">
                                <p class="text-sm text-slate-500">$ {{ $item->price }}</p>
                                </td>
                                <td class="p-4 border-b border-slate-200 py-5">
                                <p class="text-sm text-slate-500"></p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-ts-card>
        </div>
    </div>
</x-app-layout>