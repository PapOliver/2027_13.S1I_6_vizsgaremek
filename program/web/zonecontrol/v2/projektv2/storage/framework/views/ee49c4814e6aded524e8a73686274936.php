
<?php $__env->startSection('title', '| Names Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <?php if(auth()->guard()->check()): ?>
                    <th>Azonosító</th>
                    <th>Családnév</th>
                    <th>Név</th>
                    <th>Létrehozás</th>
                    <th>Műveletek</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <?php if(auth()->guard()->check()): ?>
            <tbody>
                <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($name->id); ?></td>
                        <?php if(empty($name->family)): ?>
                            <td><strong>Nincs családnév</strong></td>
                        <?php else: ?>
                            <td><?php echo e($name->family->surname); ?></td>
                        <?php endif; ?>

                        <td><?php echo e($name->name); ?></td>
                        <td><?php echo e($name->created_at); ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger btn-delete-name" data-id="<?php echo e($name->id); ?>">Törlés</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php endif; ?>
        </table>
        
        <h3 class="mt-3">Új név hozzáadása</h3>
        <form action="/names/manage/name/new" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="inputFamily">Családnév</label>
                <select name="inputFamily" id="inputFamily" class="form-control">
                    <?php $__currentLoopData = $families; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $family): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($family->id); ?>"><?php echo e($family->surname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputName">Keresztnév</label>
                <input type="text" class="form-control" id="inputName" name="inputName">
            </div>
            <button type="submit" class="btn btn-primary">Hozzáadás</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php if(auth()->guard()->check()): ?>
    <script>
       $(".btn-delete-name").on("click", function() {
            let thisBtn = $(this);
            let Id = thisBtn.data("id");
            $.ajax({
                    type: "POST",
                    url: "/names/delete" ,
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: Id
                    },
                    success: function(data) {
                        if (data.success === true) {
                            thisBtn.closest('tr').fadeOut();
                        } else {
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
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PapOliver\Desktop\2026-27\tutorial\resources\views/pages/names.blade.php ENDPATH**/ ?>