<div class="top-nav">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="date">
                <?php
                $mytime = Carbon\Carbon::now();
                echo $mytime->toDateTimeString();
                ?>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="hightlights">
                <p class="marquee">
                    <?php if($a == 0): ?>

                    <?php endif; ?>
                    <?php if($a == 1): ?>
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/index/<?php echo e($new->id); ?>">**<?php echo e($new->newsTitle); ?>||</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="col-sm-3 col-md-3">
            <div class="social">
                <ul>
                    <li><a href="<?php echo e(url('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"> login</i></a></li>
                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    <li><a href="http://facebook.com/"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="http://google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-logo">
    <div class="row">
        <div class="logo">
            <img class="logo-img" src="/img/logo.png" alt=""/>
        </div>
    </div>
</div>



