@props(['product'])

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300 flex flex-col h-full">
    <div class="h-48 w-full bg-gray-200 flex items-center justify-center overflow-hidden">
        @if($product->image)
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="object-cover h-full w-full">
        @else
            <span class="text-gray-400">No Image</span>
        @endif
    </div>
    
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-lg font-semibold text-gray-900 mb-2">
            <a href="{{ route('product.show', $product) }}" class="hover:text-indigo-600 transition h-14 overflow-hidden block">
                {{ $product->name }}
            </a>
        </h3>
        
        <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow">{{ $product->description }}</p>
        
        <div class="flex items-center justify-between mt-auto">
            <span class="text-xl font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
            
            <form action="{{ route('cart.add', $product) }}" method="POST">
                @csrf
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
