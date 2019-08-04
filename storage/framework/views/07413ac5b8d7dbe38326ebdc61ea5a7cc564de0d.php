<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit News</h1>
    </div>
</div>


<?php $__env->startSection('editId', $new->id); ?>
<?php $__env->startSection('editTitle',$new->newsTitle); ?>
<?php $__env->startSection('editAuthor',$new->author); ?>
<?php $__env->startSection('editCategory',$new->category); ?>
<?php $__env->startSection('editBody',$new->newsBody); ?>
<?php $__env->startSection('editPhoto',$new->filename); ?>

<?php $__env->startSection('editMethod'); ?>

    <?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.News.createNews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>