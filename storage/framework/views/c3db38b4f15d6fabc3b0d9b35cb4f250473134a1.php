<?php $__env->startSection('title','Edytuj'); ?>
<?php $__env->startSection('content'); ?>


    <form action="<?php echo e(route('library.update',$book->id)); ?>" method="post" >
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <div class="form-group">
            <input type="text" name="author" value="<?php echo e($book->author); ?>">
        </div>

        <div class="form-group">
            <input type="text" name="title" value="<?php echo e($book->title); ?>">
        </div>
        <div class="form-group" style="width: 200px">
            <input type="submit" class="btn btn-success" value="Zapisz">
        </div>


    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>