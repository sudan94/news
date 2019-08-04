<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Video List</h1>
        </div>
    </div>
    <div class="panel panel-default">
        <?php if(Session::has('message')): ?>
            <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
        <table class="table-hover table">
            <thead>
            <tr>
                <th>Video Title</th>
                <th>Video Description</th>
                <th>File Name</th>
                <th>Poster Name</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                    <td><a href="/videoList/<?php echo e($video->id); ?>"><?php echo e($video->videoTitle); ?></a></td>
                    <td><?php echo e($video->videoBody); ?></td>
                    <td><?php echo e($video->filename); ?></td>
                    <td class="text-concat text"><?php echo e($video->postername); ?></td>
                    <td><a href="videoList/<?php echo e($video->id.'/edit'); ?>">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    <?php if(Auth::user()->role == 'admin'): ?>
                        <td>
                            <form method="POST" action="videoList/<?php echo e($video->id); ?>/delete">
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>