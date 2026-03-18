@props(['product'])

@php
    // Mocking the specific "Top AI Pick" badge shown on the first product in the mockup
    $badge = null;
    $badgeColor = '';
    $badgeTextClass = '';
    
    if($product->id == 1) { // Or whatever condition makes it the first
        $badge = 'TOP AI PICK';
        $badgeColor = 'bg-white/90 backdrop-blur-sm border border-gray-100 shadow-sm';
        $badgeTextClass = 'text-blue-600';
    } 
@endphp

<div class="group relative flex flex-col h-full bg-transparent">
    
    <!-- Image Section -->
    <a href="{{ route('product.show', $product) }}" class="block relative aspect-square w-full rounded-2xl overflow-hidden mb-4 bg-gray-100">
        @if($badge)
            <div class="absolute top-4 right-4 z-10">
                <span class="{{ $badgeColor }} {{ $badgeTextClass }} text-[9px] font-bold px-2.5 py-1 rounded shadow-sm tracking-widest uppercase">
                    {{ $badge }}
                </span>
            </div>
        @endif
        
        @if($product->image)
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="object-cover h-full w-full group-hover:scale-105 transition-transform duration-700 ease-out">
        @else
            <!-- Placeholder if no image -->
            <div class="w-full h-full flex items-center justify-center bg-gray-50">
                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        @endif
        
        <!-- Hover Overlay (optional but nice for this clean design style) -->
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors duration-300"></div>
    </a>
    
    <!-- Content Section -->
    <div class="flex flex-col flex-grow px-1">
        <!-- Title and Icon Row -->
        <h3 class="text-sm font-bold text-gray-900 leading-tight mb-2 truncate">
            <a href="{{ route('product.show', $product) }}" class="hover:text-blue-600 transition-colors">
                {{ $product->name }}
            </a>
        </h3>
        
        <!-- Bottom Row -->
        <div class="flex items-center justify-between mt-auto">
            <span class="text-base font-black tracking-tight text-blue-600">
                ${{ number_format($product->price, 2) }}
            </span>
            
            <span class="text-[10px] uppercase tracking-wider font-semibold text-gray-400 truncate max-w-[50%] text-right">
                {{ explode(',', $product->features)[0] ?? 'Neural Tech' }}
            </span>
        </div>
        
    </div>
</div>
