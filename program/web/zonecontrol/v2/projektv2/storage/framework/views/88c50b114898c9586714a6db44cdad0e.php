
<?php $__env->startSection('title', '| Names Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>Családnév</th>
                    <th>Létrehozás</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($name->id); ?></td>
                        <td><?php echo e($name->surname); ?></td>
                        <td><?php echo e($name->created_at); ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger btn-delete-name" data-id="<?php echo e($name->id); ?>">Törlés</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <h3 class="mt-3">Családnevek hozzáadása</h3>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="/names/manage/surname" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="inputFamily">Családnév</label>
                <input type="text" class="form-control" id="inputFamily" name="inputFamily" required value="<?php echo e(old('inputFamily')); ?>" minlength="2" maxlength="20">
            </div>
            <button type="submit" class="btn btn-primary">Hozzáadás</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
       $(".btn-delete-name").on("click", function() {
            let thisBtn = $(this);
            let Id = thisBtn.data("id");
            $.ajax({
                    type: "POST",
                    url: "/names/manage/surname/delete" ,
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: Id
                    },
                    success: function(data) {
                        if (data.success === true) {
                            thisBtn.closest('tr').fadeOut();
                        }
                        else {
                            alert("Hiba történt a törlés során:\nRészletek: " + data.message);
                        }
                    },
                    error: function() {
                        alert("Nem sikerült a törlés!");
                    }
                }
            )
            }
        );
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PapOliver\Desktop\2026-27\tutorial\resources\views/pages/surname.blade.php ENDPATH**/ ?>