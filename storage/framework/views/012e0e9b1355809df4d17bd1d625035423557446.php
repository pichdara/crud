<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center my-5">
        <?php echo e($todo->name); ?>

    </h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    <?php echo e($todo->description); ?>

                </div>
            </div>
        <a href="/todos/<?php echo e($todo->id); ?>/edit" class="btn btn-md btn-info my-5">Edit</a>
        <a href="/todos/<?php echo e($todo->id); ?>/delete" class="btn btn-md btn-danger my-5 ml-2">Delete</a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\todos\resources\views/todos/show.blade.php ENDPATH**/ ?>