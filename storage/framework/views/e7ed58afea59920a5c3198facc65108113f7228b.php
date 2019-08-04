<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php if(Session::has('message')): ?>
                <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="news-block">
            <div class="row">
                
                <?php if($new->newsCategory_id != 10): ?>
                    <h1><?php echo e($new->newsTitle); ?></h1>
                    </br>
                    <?php $__currentLoopData = explode('|', $new->filename); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key ==0): ?>
                            <div class="img-container img-responsive">
                                <img src="/uploads/<?php echo e($info); ?>" width="85%" height="100%">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="news-story">
                        <p><?php echo e($new->author); ?></p>
                        <div class="text-concat">
                            <?php $__currentLoopData = explode('|', $new->newsBody); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key ==0): ?>
                                <?php echo $info; ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a href="index/<?php echo e($new->id); ?>" class="b-none">Read More</a>
                        <?php endif; ?>

                        
                        <?php if($new->newsCategory_id == 10): ?>
                            <h1><?php echo e($new->newsTitle); ?></h1>
                            </br>
                            <div class="wide">
                                <div class="content">
                                    <video preload="none" poster="/uploads/poster/<?php echo e($new->filename); ?>" controls="true">
                                        <source src="/uploads/video/<?php echo e($new->videoName); ?>"/>
                                    </video>
                                </div>
                            </div>
                    </div>
                    <div class="news-story">
                        <p><?php echo e($new->author); ?></p>
                        <div class="text-concat">
                            <?php $__currentLoopData = explode('|',$new->newsBody); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key ==0): ?>
                                    <?php echo $info; ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a href="index/<?php echo e($new->id); ?>" class="b-none">Read More</a>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerContent'); ?>

        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $news->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4 col-md-4">
                    <div class="img-container img-responsive">
                        <img src="/uploads/<?php echo e($new->filename); ?>" width="85%" height="100%"/>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="hightlights">
                        <div class="news-story">
                            <h3><?php echo e($new->newsTitle); ?></h3>
                            <div class="text-concat2">
                                <?php echo $new->newsBody; ?>

                            </div>
                            <a href="index/<?php echo e($new->id); ?>" class="b-none">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4 col-md-4">
                        <div class="table1">
                            <table class="table table-striped">

                                <thead>
                                <tr>
                                    <th>Treading News</th>
                                </tr>
                                </thead>
                                <tbody style="height:300px;">
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="individule/<?php echo e($new->id); ?>"> <?php echo e($new->newsTitle); ?></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>