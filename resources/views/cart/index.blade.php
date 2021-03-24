<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sepet') }}
        </h2>
    </x-slot>


    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <div class="flex-1">
                <table class="w-full text-sm lg:text-base" cellspacing="0">
                    <thead>
                        <tr class="h-12 uppercase">
                            <th class="hidden md:table-cell"></th>
                            <th class="text-left">Sepet</th>
                            <th class="lg:text-right text-left pl-5 lg:pl-0">
                                <span class="lg:hidden" title="Ürün Adet">Ürün Adet</span>
                                <span class="hidden lg:inline">Ürün Adet</span>
                            </th>
                            <th class="hidden text-right md:table-cell">Fiyat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cart)
                        <tr>
                            <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                    <img src="{{$cart->attributes->image}}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <p class="mb-2 md:ml-4">{{$cart->name}}</p>
                                    <form action="" method="POST">
                                        <a href="{{route('cart.destroy', $cart->id)}}" type="button"
                                            class="text-gray-700 md:ml-4">
                                            <small>(Sil)</small>
                                        </a>
                                    </form>
                                </a>
                            </td>
                            <td class="justify-center md:justify-end md:flex mt-6">
                                <div class="w-20 h-10">
                                    <div class="relative flex flex-row w-full h-8">
                                        <form action="{{route('cart.update', $cart->id)}}">
                                            @csrf
                                            <input type="number" name="quantity" value="{{$cart->quantity}}"
                                                class="w-full font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black" />
                                            <button type="submit" class="text-gray-700 md:ml-4">
                                                <small>Onayla</small>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td class="hidden text-right md:table-cell">
                                <span class="text-sm lg:text-base font-medium">
                                    {{\Cart::session(auth()->user()->id)->get($cart->id)->getPriceSum()}}₺
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</x-app-layout>
