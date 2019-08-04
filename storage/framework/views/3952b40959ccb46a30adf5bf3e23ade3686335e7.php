<div class="quicklinks">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <img src="/img/logo.png"/>
                <ul>
                    <li>Kotewsor, Kathmandu</li>
                    <li>GPO 3259</li>
                    <li>9851071270, 5547326</li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-4">
                <h4>Singha Durbar News</h4>
                <div class="row">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-6">
                            <ul>
                                <li style=""><a href="/category/<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a></li>
                            </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">

    <div class="container">

        <div class="footer-content">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="left"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2018, Devraj Bhandari</p>
                    <p class="left">All rights reserved</p>
                </div>

                <div class="col-sm-6 col-md-6">

                    <ul class="social-icons pull-right">
                        <li><a href="http://twitter.com/"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="http://facebook.com/"><i class="fa fa-facebook-official fa-2x"></i></a></li>
                        <li><a href="http://plus.google.com/"><i class="fa fa-google-plus fa-2x"></i> </a>
                        <li><a href="http://dribble.com/"><i class="fa fa-dribbble fa-2x"></i></a></li>
                        <li><a href="http://behance.com/"><i class="fa fa-behance fa-2x"></i> </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</div>