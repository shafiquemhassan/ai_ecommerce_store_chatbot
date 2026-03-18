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
    
    <!-- Hero Section -->
    <div class="hero-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-24">
            <div class="flex flex-col lg:flex-row items-center gap-16 gap-y-12">
                <!-- Text Content -->
                <div class="flex-1 lg:max-w-xl xl:max-w-2xl text-center lg:text-left">
                    <div class="inline-flex items-center space-x-2 text-[11px] font-bold text-blue-600 tracking-widest uppercase mb-6 bg-blue-50 px-3 py-1.5 rounded-full">
                        <span>Intelligent Tech Curation</span>
                    </div>
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-[#111827] tracking-tighter leading-[1.1] mb-6">
                        Experience the Future of Shopping
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed mb-10 max-w-2xl mx-auto lg:mx-0">
                        Discover gadgets tailored to your unique lifestyle with our advanced AI-driven neural recommendations engine.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="#featured" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-lg font-bold text-sm shadow-lg shadow-blue-600/20 transition flex items-center justify-center">
                            Explore Products
                        </a>
                    </div>
                </div>

                <!-- Hero Image Grid / Graphic -->
                <div class="flex-1 w-full max-w-2xl lg:max-w-none relative">
                    <!-- Simple abstract grid visual for the hero -->
                    <div class="relative w-full aspect-[4/3] rounded-2xl bg-black overflow-hidden shadow-2xl ring-1 ring-gray-900/5">
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?q=80&w=1000&auto=format&fit=crop" alt="AI Brain Graphic" class="absolute inset-0 w-full h-full object-cover opacity-90 mix-blend-screen" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Curated Section -->
    <div id="featured" class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-black tracking-tight text-gray-900 mb-2">Curated for You</h2>
                    <p class="text-sm font-medium text-gray-500">Based on your browsing neural patterns</p>
                </div>
                <a href="#" class="inline-flex items-center text-sm font-bold text-blue-600 hover:text-blue-700 transition">
                    View all recommendations 
                    <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-card','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a)): ?>
<?php $attributes = $__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a; ?>
<?php unset($__attributesOriginal3fd2897c1d6a149cdb97b41db9ff827a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a)): ?>
<?php $component = $__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a; ?>
<?php unset($__componentOriginal3fd2897c1d6a149cdb97b41db9ff827a); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="col-span-full py-12 text-center text-gray-500 font-medium">No products found matching your profile.</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            
            <!-- Pagination -->
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($products->hasPages()): ?>
                <div class="mt-24 pb-8 flex justify-center">
                    <?php echo e($products->links('vendor.pagination.tailwind')); ?>

                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

    <!-- Features Section -->
    <div class="feature-gradient py-24 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Text Sidebar -->
                <div class="lg:w-1/3">
                    <h2 class="text-4xl font-black text-gray-900 tracking-tight leading-tight mb-6">
                        Why Shop with<br/>ShopAI?
                    </h2>
                    <p class="text-base text-gray-600 leading-relaxed mb-8">
                        We leverage cutting-edge artificial intelligence to redefine your entire shopping journey, from discovery to delivery.
                    </p>
                    <div class="w-12 h-1 bg-blue-600 rounded-full"></div>
                </div>

                <!-- Features Grid -->
                <div class="lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-8 gap-y-12">
                    <!-- Feature 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Personalized Picks</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Unique recommendations that actually match your usage patterns and lifestyle needs.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Instant Support</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">AI customer success assistants ready to help solve technical issues 24/7/365.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Smart Logistics</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Predictive shipping models that get your items to you faster than standard delivery.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Biometric Safety</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Enhanced checkout security using neural identity verification for every transaction.</p>
                    </div>
                </div>
            </div>
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
<?php /**PATH C:\Users\hassa\OneDrive\Desktop\ai_ecommerce_store_chatbot\resources\views/home.blade.php ENDPATH**/ ?>