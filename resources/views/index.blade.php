@if(Auth::user())
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ürünler') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="grid grid-cols-3 gap-4 p-1 m-1">
                    {{-- Card --}}
                    @foreach ($products as $product)

                    <div class="wrapper bg-gray-400 sm:rounded-lg antialiased text-gray-900">
                        <div>

                            <img width="200" height="200"
                                src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-silver-select-201810?wid=892&hei=820&&qlt=80&.v=1603332212000"
                                alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">

                            <div class="relative px-4 -mt-16  ">
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <div class="flex items-baseline">
                                        <span
                                            class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                            New
                                        </span>
                                        <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                            2020
                                        </div>
                                    </div>

                                    <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">
                                        {{$product->name}}
                                    </h4>

                                    <div class="mt-1">
                                        {{$product->price}}
                                        <span class="text-gray-600 text-sm"> /₺</span>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-teal-600 text-md font-semibold">{{$product->stock}} Stok
                                            sayısı </span>
                                    </div>
                                    <div align="center" class="mt-4">
                                        <a href="{{route('cart.add', $product)}}" type="button"
                                            class="w-full focus:outline-none bg-gray-400 focus:ring-white-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Sepete Ekle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{-- Card end --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@else
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ürünler') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="grid grid-cols-3 gap-4 p-1 m-1">
                    {{-- Card --}}
                    @foreach ($products as $product)

                    <div class="wrapper bg-gray-400 sm:rounded-lg antialiased text-gray-900">
                        <div>

                            <img width="200" height="200"
                                src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-silver-select-201810?wid=892&hei=820&&qlt=80&.v=1603332212000"
                                alt=" random imgee" class="w-full object-cover object-center rounded-lg shadow-md">

                            <div class="relative px-4 -mt-16  ">
                                <div class="bg-white p-6 rounded-lg shadow-lg">
                                    <div class="flex items-baseline">
                                        <span
                                            class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                            New
                                        </span>
                                        <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                            2020
                                        </div>
                                    </div>

                                    <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">
                                        {{$product->name}}
                                    </h4>

                                    <div class="mt-1">
                                        {{$product->price}}
                                        <span class="text-gray-600 text-sm"> /₺</span>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-teal-600 text-md font-semibold">{{$product->stock}} Stok
                                            sayısı </span>
                                    </div>
                                    <div align="center" class="mt-4">
                                        <a href="{{route('cart.add', $product)}}" type="button"
                                            class="w-full focus:outline-none bg-gray-400 focus:ring-white-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                            Sepete Ekle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{-- Card end --}}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
@endif
