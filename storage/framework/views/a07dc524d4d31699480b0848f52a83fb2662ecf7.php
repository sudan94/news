<?php $__env->startSection('content'); ?>
    <?php if($news->newsCategory_id !=9): ?>
        <div class="news-block">
            <div class="row">
                <h1><?php echo e($news->newsTitle); ?></h1></br>
                <?php $new = explode('|', $news->newsBody) ?>
                <?php $images = (explode('|', $news->filename))?>
                <?php for($i=0;$i<count(explode('|', $news->filename));$i++): ?>
                    <div class="img-container">
                        <img src="/uploads/<?php echo e($images[$i]); ?>">
                    </div>
                    <div class="news-story">
                        <?php echo $new[$i]; ?>

                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if($news->newsCategory_id == 9): ?>
        <div class="news-block">
            <div class="row">
                <h1><?php echo e($news->newsTitle); ?></h1>
                <div class="wide">
                    <div class="content">
                        <video controls="controls" preload="none" id="myvideo"
                               poster="/uploads/poster/<?php echo e($news->filename); ?>">
                            <source src="/uploads/video/<?php echo e($news->videoName); ?>">
                        </video>
                    </div>
                </div>
                <div class="news-story">
                    <p><?php echo e($news->author); ?></p>
                    <br/><br/>
                    <p><?php echo $news->newsBody; ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>