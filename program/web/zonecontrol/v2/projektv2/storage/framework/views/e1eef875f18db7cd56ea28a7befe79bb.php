
<?php $__env->startSection('title', '| Test Page'); ?>

<?php $__env->startSection('content'); ?>
        <div class="jumbotron">
            <h1><?php echo e(Date('Y-m-d H:i:s')); ?></h1>
            <h2 <?php if($randomName == 'Epstein' or $randomName == 'Jeff'): ?> style="color: lightseagreen; font-weight: bold;" <?php endif; ?>><?php echo e($randomName); ?></h2>
            <p class="lead">Első demi route</p>
            <a href="https://szbi-pg.hu" class="btn btn-lg btn-primary">Iskola</a>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PapOliver\Desktop\2026-27\tutorial\resources\views/pages/test.blade.php ENDPATH**/ ?>