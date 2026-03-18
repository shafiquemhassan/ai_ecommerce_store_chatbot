<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildSchema()); ?>

</div>
<?php /**PATH C:\Users\hassa\OneDrive\Desktop\ai_ecommerce_store_chatbot\vendor\filament\schemas\resources\views/components/grid.blade.php ENDPATH**/ ?>