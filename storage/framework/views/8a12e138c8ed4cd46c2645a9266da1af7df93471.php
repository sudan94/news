<?php $__env->startSection('editCategory',$items->name); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Edit Category </h1>
        </div>
    </div>
        <form class="form-inline" method="post" action="/newsCategory/<?php echo e($items->id); ?>/update">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="category">Edit Category:</label>
                <input type="text" class="form-control" name="category" value="<?php echo $__env->yieldContent('editCategory'); ?>">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>