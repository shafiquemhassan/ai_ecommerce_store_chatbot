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
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8">Shopping Cart</h1>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?php echo e(session('success')); ?></span>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(empty($cart) || count($cart) === 0): ?>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <p class="text-gray-500 mb-4">Your cart is empty.</p>
                <a href="<?php echo e(route('home')); ?>" class="text-indigo-600 hover:text-indigo-500 font-medium">Continue Shopping &rarr;</a>
            </div>
        <?php else: ?>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <ul class="divide-y divide-gray-200">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="flex py-6 px-6">
                            <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->image): ?>
                                    <img src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="h-full w-full object-cover object-center">
                                <?php else: ?>
                                    <div class="h-full w-full bg-gray-100 flex items-center justify-center text-gray-400">No Img</div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <h3><a href="<?php echo e(route('product.show', $product)); ?>"><?php echo e($product->name); ?></a></h3>
                                        <p class="ml-4">$<?php echo e(number_format($product->price * $cart[$product->id], 2)); ?></p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">$<?php echo e(number_format($product->price, 2)); ?> each</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <p class="text-gray-500">Qty <?php echo e($cart[$product->id]); ?></p>

                                    <div class="flex">
                                        <form action="<?php echo e(route('cart.remove', $product->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>
                
                <div class="border-t border-gray-200 py-6 px-6 bg-gray-50">
                    <div class="flex justify-between text-base font-medium text-gray-900 mb-4">
                        <p>Subtotal</p>
                        <p>$<?php echo e(number_format($total, 2)); ?></p>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo e(route('checkout.index')); ?>" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                    </div>
                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                        <p>
                            or <a href="<?php echo e(route('home')); ?>" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH C:\Users\hassa\OneDrive\Desktop\ai_ecommerce_store_chatbot\resources\views/cart/index.blade.php ENDPATH**/ ?>