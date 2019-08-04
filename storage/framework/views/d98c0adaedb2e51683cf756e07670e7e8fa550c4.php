<?php $__env->startSection('content'); ?>
    <table class="table-hover table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Body</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $allNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
            <tr>
                <td><a href="/showNews/<?php echo e($news->id); ?>"><?php echo e($news->newsTitle); ?></a></td>
                <td><?php echo e($news->author); ?></td>
                <td><?php echo e($news->category); ?></td>
                <td><?php echo e($news->newsBody); ?></td>
                <td><a href="/showNews/<?php echo e($news->id); ?>/edit">
                        <button type="button" class="btn btn-success" style="border: none">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="/showNews/<?php echo e($news->id); ?>/delete">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>


                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
            </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>