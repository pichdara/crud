<?php $__env->startSection('content'); ?>
<h1 class="text-center my-5">Create Todos</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">Edit todo</div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="list-group">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <?php echo e($error); ?>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                    
                <?php endif; ?>
            <form action="/todos/<?php echo e($todo->id); ?>/update-todos" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                    <input type="text" placeholder="name" class="form-control" name="name" value="<?php echo e($todo->name); ?>">
                    </div>
                    <div class="form-group">
                    <textarea name="description" placeholder="description" id="" cols="5" rows="5" class="form-control"><?php echo e($todo->description); ?></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-lg">Update Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\todos\resources\views/todos/edit.blade.php ENDPATH**/ ?>