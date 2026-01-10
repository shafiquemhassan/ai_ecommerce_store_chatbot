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

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300 flex flex-col h-full">
    <div class="h-48 w-full bg-gray-200 flex items-center justify-center overflow-hidden">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->image): ?>
            <img src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="object-cover h-full w-full">
        <?php else: ?>
            <span class="text-gray-400">No Image</span>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
    
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-lg font-semibold text-gray-900 mb-2">
            <a href="<?php echo e(route('product.show', $product)); ?>" class="hover:text-indigo-600 transition h-14 overflow-hidden block">
                <?php echo e($product->name); ?>

            </a>
        </h3>
        
        <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow"><?php echo e($product->description); ?></p>
        
        <div class="flex items-center justify-between mt-auto">
            <span class="text-xl font-bold text-gray-900">$<?php echo e(number_format($product->price, 2)); ?></span>
            
            <form action="<?php echo e(route('cart.add', $product)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\hassa\Desktop\customer_ai_store\resources\views/components/product-card.blade.php ENDPATH**/ ?>