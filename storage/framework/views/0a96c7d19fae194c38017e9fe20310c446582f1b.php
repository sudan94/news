<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="news-block">
            <div class="row">
                <h1><?php echo e($new->newsTitle); ?></h1>
                <div class="news-links">
                    <ul>
                        <li>
                            <button type="button" class="b-blue">Politics</button>
                        </li>
                        <li>
                            <button type="button" class="b-red">Social</button>
                        </li>
                    </ul>
                </div>
                <div class="img-container">
                    <img src="/uploads/<?php echo e($new->filename); ?>">
                </div>
                <div class="news-story">
                    <p class="text-concat"><?php echo e($new->author); ?>

                        <?php echo e($new->newsBody); ?>

                    </p>
                    <a href="/index/<?php echo e($new->id); ?>" class="b-none">READ MORE</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>