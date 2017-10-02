<?php $__env->startSection('title','Dodawanie książki'); ?>
<?php $__env->startSection('content'); ?>



    <?= Form::open(array('route' => 'library.save', 'method' => 'post')) ?>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="form-group" style="width: 200px">
        <input type="text" class="form-control" name="author" placeholder="Podaj autora" required>
    </div>
     <div class="form-group" style="width: 200px">
         <input type="text" class="form-control" name="title" placeholder="Podaj tytuł" required>
     </div>
    <div class="form-group" style="width: 200px">
        <input type="submit" class="btn btn-success" value="Dodaj">
    </div>
<?= Form::close() ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>