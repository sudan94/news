<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awesome Albums</title>
    <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 50px;
        }
        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle"data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Awesome Albums</a>
        <div class="nav-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo e(URL::route('create_album_form')); ?>">Create New Album</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="starter-template">

        <div class="row">
            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3">
                    <div class="thumbnail" style="min-height: 514px;">
                        <img alt="<?php echo e($album->name); ?>" src="/albums/<?php echo e($album->cover_image); ?>">
                        <div class="caption">
                            <h3><?php echo e($album->name); ?></h3>
                            <p><?php echo e($album->description); ?></p>
                            <p><?php echo e(count($album->Photos)); ?> image(s).</p>
                            <p>Created date:  <?php echo e(date("d F Y",strtotime($album->created_at))); ?> at <?php echo e(date("g:ha",strtotime($album->created_at))); ?></p>
                            <p><a href="<?php echo e(URL::route('show_album',%20array('id'=>$album->id))); ?>" class="btn btn-big btn-default">Show Gallery</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div><!-- /.container -->
</div>

</body>
</html>