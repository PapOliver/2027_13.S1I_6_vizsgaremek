
<?php $__env->startSection('title', '| ' . auth()->user()->name . ' Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 col-md-6">
            <h1><?php echo e(auth()->user()->name); ?>'s Profile</h1>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?php echo e(auth()->user()->name); ?>'s Profile Information</h2>
                    <p class="card-text">Profile</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Email: <?php echo e(auth()->user()->email); ?></li>
                    <li class="list-group-item">Registered: <?php echo e(auth()->user()->created_at->format('F j, Y')); ?></li>
                </ul>

            </div>
            <div class="col-12 col-md-6">
                <h3>Change Password</h3>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div> 
                <?php endif; ?>
                <form action="/profile/change-password" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>

                </form>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PapOliver\Desktop\2026-27\tutorial\resources\views/pages/profile.blade.php ENDPATH**/ ?>