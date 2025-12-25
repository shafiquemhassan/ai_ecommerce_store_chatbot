<x-storefront-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6">
                <!-- Image -->
                <div class="flex items-center justify-center bg-gray-100 rounded-lg h-96">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="object-contain h-full w-full">
                    @else
                        <span class="text-gray-400">No Image Available</span>
                    @endif
                </div>

                <!-- Details -->
                <div class="flex flex-col">
                    <h1 class="text-3xl font-extrabold text-gray-900 mb-4">{{ $product->name }}</h1>
                    
                    <div class="text-2xl font-bold text-indigo-600 mb-6">${{ number_format($product->price, 2) }}</div>
                    
                    <div class="prose prose-blue text-gray-500 mb-6">
                        <p>{{ $product->description }}</p>
                    </div>
                    
                    @if($product->features)
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Features</h3>
                            <p class="text-sm text-gray-600 whitespace-pre-line">{{ $product->features }}</p>
                        </div>
                    @endif
                    
                    @if($product->warranty_information)
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Warranty</h3>
                            <p class="text-sm text-gray-600">{{ $product->warranty_information }}</p>
                        </div>
                    @endif

                    <div class="mt-auto">
                        <form action="{{ route('cart.add', $product) }}" method="POST" class="flex gap-4">
                            @csrf
                            <div class="w-20">
                                <label for="quantity" class="sr-only">Quantity</label>
                                <input type="number" name="quantity" id="quantity" min="1" value="1" 
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            
                            <button type="submit" class="flex-1 bg-indigo-600 text-white px-6 py-3 rounded-md font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-center">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Recommendations/Related? (Optional) -->
        </div>
    </div>
</x-storefront-layout>
