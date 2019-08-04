<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News Category</h1>
        </div>
    </div>
    <div class="container">
        <?php if(Session::has('message')): ?>
            <p class="alert <?php echo e(Session::get('alert-class','alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
        <form class="form-inline" method="post" action="/newsCategory">
            <?php echo e(csrf_field()); ?>

            <?php $__env->startSection('editCat'); ?>
            <?php echo $__env->yieldSection(); ?>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" name="category">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div><br/>

    <div class="col-lg-12">
        <table class="table-hover table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><a href="newsCategory/<?php echo e($item->id.'/edit'); ?>">
                            <button type="button" class="btn btn-success" style="border: none">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="newsCategory/<?php echo e($item->id); ?>/delete">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>


                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>