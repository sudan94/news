<?php $__env->startSection('content'); ?>
    <!-- START HTML5 VIDEO -->
    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="news-block">
            <div class="row">
                <h1><?php echo e($video->newsTitle); ?></h1>
                <div class="wide">
                    <div class="content">
                        <video preload="none" poster="/uploads/poster/<?php echo e($video->filename); ?>" controls="true">
                            <source src="/uploads/video/<?php echo e($video->videoName); ?>"/>
                        </video>
                    </div>
                </div>
                <div class="news-story">
                    <?php echo e($video->newsBody); ?>

                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- END HTML5 VIDEO -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>