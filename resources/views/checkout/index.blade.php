<x-storefront-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Checkout</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Order Summary -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Order Summary</h2>
                <ul class="divide-y divide-gray-200 mb-4">
                    @foreach($products as $product)
                        <li class="flex py-4">
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-gray-900">{{ $product->name }}</h3>
                                <p class="text-sm text-gray-500">Qty {{ $cart[$product->id] }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ number_format($product->price * $cart[$product->id], 2) }}</p>
                        </li>
                    @endforeach
                </ul>
                <div class="border-t border-gray-200 pt-4 flex justify-between">
                    <span class="text-base font-medium text-gray-900">Total</span>
                    <span class="text-base font-medium text-gray-900">${{ number_format($total, 2) }}</span>
                </div>
            </div>
            
            <!-- Payment Form (Mock) -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Payment Details</h2>
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Cardholder Name</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="John Doe" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Card Number</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="0000 0000 0000 0000" required>
                        </div>
                        <div class="flex space-x-4">
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700">Expiry</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="MM/YY" required>
                            </div>
                            <div class="flex-1">
                                <label class="block text-sm font-medium text-gray-700">CVC</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="123" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Pay ${{ number_format($total, 2) }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-storefront-layout>
