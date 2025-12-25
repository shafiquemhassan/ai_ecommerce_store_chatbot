<x-storefront-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Shopping Cart</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if(empty($cart) || count($cart) === 0)
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <p class="text-gray-500 mb-4">Your cart is empty.</p>
                <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">Continue Shopping &rarr;</a>
            </div>
        @else
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <ul class="divide-y divide-gray-200">
                    @foreach($products as $product)
                        <li class="flex py-6 px-6">
                            <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                                @else
                                    <div class="h-full w-full bg-gray-100 flex items-center justify-center text-gray-400">No Img</div>
                                @endif
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <h3><a href="{{ route('product.show', $product) }}">{{ $product->name }}</a></h3>
                                        <p class="ml-4">${{ number_format($product->price * $cart[$product->id], 2) }}</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">${{ number_format($product->price, 2) }} each</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <p class="text-gray-500">Qty {{ $cart[$product->id] }}</p>

                                    <div class="flex">
                                        <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                
                <div class="border-t border-gray-200 py-6 px-6 bg-gray-50">
                    <div class="flex justify-between text-base font-medium text-gray-900 mb-4">
                        <p>Subtotal</p>
                        <p>${{ number_format($total, 2) }}</p>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('checkout.index') }}" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                    </div>
                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                        <p>
                            or <a href="{{ route('home') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></a>
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-storefront-layout>
