<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-ts-button icon="table-cells" class="mb-4 ml-3" href="{{ route('menu.create') }}">Agregar Menú</x-ts-button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <table class="w-full text-left table-auto min-w-max">
                    <thead>
                    <tr class="border-b border-slate-300 bg-slate-50">
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Nombre</th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500"></th>
                        <th class="p-4 text-sm font-normal leading-none text-slate-500">Ver</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 border-b border-slate-200 py-5">
                                    <p class="block font-semibold text-sm text-slate-800">{{ $menu->name }}</p>
                                </td>
                                <td class="p-4 border-b border-slate-200 py-5">
                                </td>
                                <td class="p-4 border-b border-slate-200 py-5">
                                    <x-ts-button.circle href="{{ route('menu.show', $menu) }}" icon="pencil">Edit</x-ts-button.circle>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
