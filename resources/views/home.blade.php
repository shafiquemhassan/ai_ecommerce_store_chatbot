<x-storefront-layout>
    <!-- Hero Section -->
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Welcome to</span>
                    <span class="block text-indigo-600">ShopAI</span>
                </h1>
                <p class="mt-4 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Your personalized shopping experience powered by AI details and smart recommendations.
                </p>
            </div>
        </div>
    </div>

    <!-- Recommendations -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 mb-6">Recommended For You</h2>
        
        @if($products->isEmpty())
            <p class="text-gray-500">Check back soon for new products!</p>
        @else
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        @endif
    </div>
</x-storefront-layout>
