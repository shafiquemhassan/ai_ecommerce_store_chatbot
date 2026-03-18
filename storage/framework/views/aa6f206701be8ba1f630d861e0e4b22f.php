<?php if (isset($component)) { $__componentOriginal2f1a0b43b0f4913ab52eb9d7d7a32462 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f1a0b43b0f4913ab52eb9d7d7a32462 = $attributes; } ?>
<?php $component = App\View\Components\StorefrontLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('storefront-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StorefrontLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6">
                <!-- Image -->
                <div class="flex items-center justify-center bg-gray-100 rounded-lg h-96">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->image): ?>
                        <img src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="object-contain h-full w-full">
                    <?php else: ?>
                        <span class="text-gray-400">No Image Available</span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <!-- Details -->
                <div class="flex flex-col">
                    <h1 class="text-3xl font-extrabold text-gray-900 mb-4"><?php echo e($product->name); ?></h1>
                    
                    <div class="text-2xl font-bold text-indigo-600 mb-6">$<?php echo e(number_format($product->price, 2)); ?></div>
                    
                    <div class="prose prose-blue text-gray-500 mb-6">
                        <p><?php echo e($product->description); ?></p>
                    </div>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->features): ?>
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Features</h3>
                            <p class="text-sm text-gray-600 whitespace-pre-line"><?php echo e($product->features); ?></p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->warranty_information): ?>
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Warranty</h3>
                            <p class="text-sm text-gray-600"><?php echo e($product->warranty_information); ?></p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <div class="mt-auto">
                        <form action="<?php echo e(route('cart.add', $product)); ?>" method="POST" class="flex gap-4">
                            <?php echo csrf_field(); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f1a0b43b0f4913ab52eb9d7d7a32462)): ?>
<?php $attributes = $__attributesOriginal2f1a0b43b0f4913ab52eb9d7d7a32462; ?>
<?php unset($__attributesOriginal2f1a0b43b0f4913ab52eb9d7d7a32462); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f1a0b43b0f4913ab52eb9d7d7a32462)): ?>
<?php $component = $__componentOriginal2f1a0b43b0f4913ab52eb9d7d7a32462; ?>
<?php unset($__componentOriginal2f1a0b43b0f4913ab52eb9d7d7a32462); ?>
<?php endif; ?>
<?php /**PATH C:\Users\hassa\OneDrive\Desktop\ai_ecommerce_store_chatbot\resources\views/products/show.blade.php ENDPATH**/ ?>