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
                    <td><a href="/<?php echo e($book->id); ?>/edit" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <button type="button" class="btn btn-success">Dodaj nową książkę</button>
    <br>
    <?php echo e($books->links()); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>