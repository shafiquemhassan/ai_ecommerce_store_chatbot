<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    // Mocking the specific "Top AI Pick" badge shown on the first product in the mockup
    $badge = null;
    $badgeColor = '';
    $badgeTextClass = '';
    
    if($product->id == 1) { // Or whatever condition makes it the first
        $badge = 'TOP AI PICK';
        $badgeColor = 'bg-white/90 backdrop-blur-sm border border-gray-100 shadow-sm';
        $badgeTextClass = 'text-blue-600';
    } 
?>

<div class="group relative flex flex-col h-full bg-transparent">
    
    <!-- Image Section -->
    <a href="<?php echo e(route('product.show', $product)); ?>" class="block relative aspect-square w-full rounded-2xl overflow-hidden mb-4 bg-gray-100">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($badge): ?>
            <div class="absolute top-4 right-4 z-10">
                <span class="<?php echo e($badgeColor); ?> <?php echo e($badgeTextClass); ?> text-[9px] font-bold px-2.5 py-1 rounded shadow-sm tracking-widest uppercase">
                    <?php echo e($badge); ?>

                </span>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->image): ?>
            <img src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="object-cover h-full w-full group-hover:scale-105 transition-transform duration-700 ease-out">
        <?php else: ?>
            <!-- Placeholder if no image -->
            <div class="w-full h-full flex items-center justify-center bg-gray-50">
                <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
        <!-- Hover Overlay (optional but nice for this clean design style) -->
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors duration-300"></div>
    </a>
    
    <!-- Content Section -->
    <div class="flex flex-col flex-grow px-1">
        <!-- Title and Icon Row -->
        <h3 class="text-sm font-bold text-gray-900 leading-tight mb-2 truncate">
            <a href="<?php echo e(route('product.show', $product)); ?>" class="hover:text-blue-600 transition-colors">
                <?php echo e($product->name); ?>

            </a>
        </h3>
        
        <!-- Bottom Row -->
        <div class="flex items-center justify-between mt-auto">
            <span class="text-base font-black tracking-tight text-blue-600">
                $<?php echo e(number_format($product->price, 2)); ?>

            </span>
            
            <span class="text-[10px] uppercase tracking-wider font-semibold text-gray-400 truncate max-w-[50%] text-right">
                <?php echo e(explode(',', $product->features)[0] ?? 'Neural Tech'); ?>

            </span>
        </div>
        
    </div>
</div>
<?php /**PATH C:\Users\hassa\OneDrive\Desktop\ai_ecommerce_store_chatbot\resources\views/components/product-card.blade.php ENDPATH**/ ?>