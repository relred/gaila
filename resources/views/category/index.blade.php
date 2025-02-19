<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-ts-button icon="tag" class="mb-4 ml-3" href="{{ route('category.create') }}">Agregar Categoría</x-ts-button>
            <table class="w-full text-left table-auto min-w-max">
                <thead>
                    <tr class="border-b border-slate-300 bg-slate-50">
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Nombre</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Menú</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="bg-white hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200 py-5">
                                <p class="block font-semibold text-sm text-slate-800">{{ $category->name }}</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 py-5">
                                <p class="block font-semibold text-sm text-slate-800">{{ $category->menu->name }}</p>
                            </td>
                            <td class="p-4 border-b border-slate-200 py-5">
                                <x-ts-button.circle href="{{ route('category.show', $category) }}" icon="pencil">Edit</x-ts-button.circle>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
