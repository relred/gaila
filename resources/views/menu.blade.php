<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gaila</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <tallstackui:script />
    </head>
    <body class="bg-sky-400 font-sans">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <h1 class="text-3xl capitalize text-center mt-12 mb-4 text-white font-bold" style="text-shadow: 0px 0px 5px black;">{{ $menu->name }}</h1>
        <div class="flex min-h-screen w-full items-center justify-center">
            <div class="w-full mx-auto font-light mb-6 pb-6">
                <div class="max-w-3xl">
                    @foreach ($menu->categories()->get() as $category)
                        <h2 class="ml-6 text-xl font-bold" style="text-shadow: 0px 0px 5px #e9e9e9;">{{ $category->name }}</h2>
                        @foreach ($category->items()->get() as $item)
                            <div class="m-4">
                                <x-ts-card>
                                    <div class="flex items-center">
                                        <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border ">
                                            <img src="{{ Storage::url($item->image) }}" alt="">
                                        </div>
                                        <div class="flex-grow pl-3">
                                            <h6 class="font-semibold uppercase text-zinc-700">{{ $item->name }}</h6>
                                            <p class="text-gray-500">{{ $item->description }}</p>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-800 text-xl">${{ $item->price }}</span><span class="font-semibold text-gray-600 text-xs">.00</span>
                                        </div>
                                    </div>
                                </x-ts-card>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>

    </body>
</html>
