<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News List</h1>
        </div>
    </div>
    <?php if(Session::has('message')): ?>
        <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
    <?php endif; ?>
    <div class="panel panel-default">
        <table class="table-hover table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Edit</th>
                <?php if(Auth::user()->role == 'admin'): ?>
                <th>Delete</th>
                <?php endif; ?>
                <th>
                </th>
                <th></th>
            </tr>
            </thead>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><a href="/showNews/<?php echo e($new->id); ?>"><?php echo e($new->newsTitle); ?></a></td>
                    <td><?php echo e($new->author); ?></td>
                    <td><?php echo e($new->category); ?></td>
                    <td><a href="showNews/<?php echo e($new->id.'/edit'); ?>">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    <?php if(Auth::user()->role == 'admin'): ?>
                        <td>
                            <form method="POST" action="showNews/<?php echo e($new->id); ?>/delete">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    <?php endif; ?>
                </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>