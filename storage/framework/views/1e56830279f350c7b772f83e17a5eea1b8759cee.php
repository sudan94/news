<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Single News</h1>
        </div>
    </div>
    <div class="container">
        <h2>News</h2>
        <div class="panel panel-default">
            <table class="table-hover table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Body</th>
                </tr>
                </thead>
                    <tbody>
                    <tr>
                        <td><?php echo e($news->newsTitle); ?></td>
                        <td><?php echo e($news->author); ?></td>
                        <td><?php echo e($news->category); ?></td>
                        <td><?php echo e($news->newsBody); ?></td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>