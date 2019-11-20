<?php $__env->startSection('content'); ?>
    
<div class="container">
        <h1 class="text-center my-5">Todo List page</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item">
                                    <?php echo e($todo->name); ?>

                                    <?php if(!$todo->completed): ?>
                                    <a href="/todos/<?php echo e($todo->id); ?>/complete"><button class="btn btn-warning btn-sm float-right ml-2" style="color:aliceblue">Complete</button></a> 
                                    <?php endif; ?>
                                <a href="/todos/<?php echo e($todo->id); ?>"><button class="btn btn-primary btn-sm float-right">View</button></a> 
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\todos\resources\views/todos/index.blade.php ENDPATH**/ ?>