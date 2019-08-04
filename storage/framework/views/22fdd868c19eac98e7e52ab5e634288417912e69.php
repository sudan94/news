<?php $__env->startSection('content'); ?>
    <!-- START HTML5 VIDEO -->
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="Rvideo-box">
                <?php echo e($videos->videoTitle); ?>

                <video controls="controls" preload="none" id="myvideo"
                       poster="/uploads/poster/<?php echo e($videos->postername); ?>">
                    <source src="/uploads/video/<?php echo e($videos->filename); ?>">
                    <div class="Rvideo-nosupport">
                        *Your web browser does not support HTML5 video*<br>
                    </div>
                </video>
                <div class="Rvideo-caption">
                    <?php echo e($videos->videoBody); ?><br>
                </div>
            </div>
        </div>
    </div>
    <!-- END HTML5 VIDEO -->
<?php $__env->stopSection(); ?>
<style>
    .Rvideo-box {
        background-color: #000000;
        text-align: center;
        padding: 10px;
        margin: 10px auto 10px auto;
        width: 100%;
        max-width: 520px;
        height: auto;
        border: 1px solid #000000;
    }

    .Rvideo-box video {
        width: 100%;
        height: auto;
        display: block;
        padding: 0px;
        margin: 0px;
    }

    .Rvideo-caption {
        color: #FFFFFF;
        font-size: 11px;
        font-weight: bold;
        text-align: center;
        padding: 8px 5px 8px 5px;
    }

    .Rvideo-nosupport {
        color: #FFFFFF;
        padding-top: 110px;
        padding-bottom: 110px;
    }
</style>
<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>