<?php echo $__env->make('includes.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('includes.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main role="main" class="container"> 
    <?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('includes.foot', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PapOliver\Desktop\2026-27\tutorial\resources\views/layouts/app.blade.php ENDPATH**/ ?>