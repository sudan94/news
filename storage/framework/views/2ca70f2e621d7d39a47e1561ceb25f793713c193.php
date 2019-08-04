<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User List</h1>
        </div>
    </div>
    <?php if(Session::has('message')): ?>
        <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
    <?php endif; ?>
    <a href="<?php echo e(url('/register')); ?>"> <button type="button" class="btn btn-primary">Add Users</button></a>
    </br>
    </br>
        <div class="panel panel-default">
            <table class="table-hover table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><a href="users/<?php echo e($user->id.'/edit'); ?>">
                                <button type="button" class="btn btn-success" style="border: none">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="users/<?php echo e($user->id); ?>/delete">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"
                                                                                aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>