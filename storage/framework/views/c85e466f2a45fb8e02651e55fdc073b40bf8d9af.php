<?php $__env->startSection('editCategory',$users->name); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Edit User</h1>
        </div>
    </div>
    <form class="form-inline" method="post" action="/users/<?php echo e($users->id); ?>/update">
        <?php echo e(csrf_field()); ?>


            <label>Edit Users Role:</label>
        <br/>
        <br/>
        <h3><?php echo e($users->name); ?></h3>
        <div class="radio">
            <label>
                <input type="radio" name="role" id="role"  value="admin" checked>
                Admin
            </label>
        </div>
        <br/>
        <div class="radio">
            <label>
                <input type="radio" name="role" id="role" value="user">
                User
            </label>
        </div>
        <br/>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>