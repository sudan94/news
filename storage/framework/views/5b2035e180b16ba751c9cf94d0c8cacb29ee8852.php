<?php $__env->startSection('editVideoTitle',$video->videoTitle); ?>
<?php $__env->startSection('editVideoBody',$video->videoBody); ?>
<?php $__env->startSection('editVideo',$video->filename); ?>
<?php $__env->startSection('editPoster',$video->postername); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Video</h1>
        </div>
    </div>
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box-body">
                    <form method="post" action="/videoList/<?php echo e($video->id); ?>/update" enctype="multipart/form-data"
                          class="form-group">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <label>video Title</label>
                        <div class="form-group">
                            <input type="text" id="videoTitle" name="videoTitle" class="form-control"
                                   value="<?php echo $__env->yieldContent('editVideoTitle'); ?>">
                        </div>
                        <label>video Description</label>
                        <div class="form-group">
                           <textarea class="form-control" id="videoBody" rows="5" name="videoBody"
                                     value=""><?php echo $__env->yieldContent('editVideoBody'); ?></textarea>
                        </div>
                        <label>video</label>
                        <input type="file" name="video" value="<?php echo $__env->yieldContent('editVideo'); ?>"><br>
                        <label>poster</label>
                        <input type="file" name="poster" value="<?php echo $__env->yieldContent('editPoster'); ?>"><br>

                        <button type="submit" class="btn btn-primary">upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>