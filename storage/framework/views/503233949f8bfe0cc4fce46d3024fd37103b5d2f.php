<?php $__env->startSection('title','Biblioteka'); ?>
<?php $__env->startSection('content'); ?>



    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>AUTHOR</th>
            <th>TITLE</th>
            <th>OPTIONS</th>
        </tr>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->id); ?></td>
                <td><?php echo e($book->author); ?> </td>
                <td><?php echo e($book->title); ?></td>
                    <td><a href="<?php echo e(route('library.edit',$book->id)); ?>" class="btn btn-info">Edytuj</a> <a href="<?php echo e(route('library.delete',$book->id)); ?>" class="btn btn-danger">Usuń</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>"
    <a href="<?php echo e(route('library.add')); ?>" type="button" class="btn btn-success">Dodaj nową książkę</a>
    <br>
    <?php echo e($books->links()); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>