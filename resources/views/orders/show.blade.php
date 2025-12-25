<x-storefront-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900">Order #{{ $order->id }}</h1>
            <a href="{{ route('orders.index') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">&larr; Back to Orders</a>
        </div>
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-8">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Order Details</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Placed on {{ $order->created_at->format('F d, Y') }}</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ ucfirst($order->status) }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Payment Status</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ ucfirst($order->payment_status) }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Total Amount</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 font-bold">${{ number_format($order->total_amount, 2) }}</dd>
                    </div>
                </dl>
            </div>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Items</h3>
            </div>
            <ul class="divide-y divide-gray-200">
                @foreach($order->items as $item)
                    <li class="px-4 py-4 sm:px-6 flex justify-between items-center">
                        <div class="flex items-center">
                             @if($item->product->image)
                                <img src="{{ Storage::url($item->product->image) }}" class="h-10 w-10 rounded-full object-cover mr-4" alt="">
                            @endif
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">{{ $item->product->name }}</h4>
                                <p class="text-sm text-gray-500">Qty: {{ $item->quantity }}</p>
                            </div>
                        </div>
                        <div class="text-sm font-medium text-gray-900">
                            ${{ number_format($item->price, 2) }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-storefront-layout>
