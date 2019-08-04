<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Video News</h1>
        </div>
    </div>
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box-body">
                    <form method="post" action="/createVideo" enctype="multipart/form-data"
                          class="form-group" >
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="category" value="video">
                        <input type="hidden" name="newsCategory_id" value="9">
                        <label>video Title</label>
                        <div class="form-group">
                            <input type="text" id="videoTitle" name="videoTitle" class="form-control">
                        </div>
                        <label>video Description</label>
                        <div class="form-group">
                           <textarea class="form-control ckeditor" id="videoBody" rows="5" name="videoBody"
                                     value=""></textarea>
                        </div>
                        <label>Author</label>
                        <div class="form-group">
                            <input type="text" id="author" name="author" class="form-control">
                        </div>
                        <label>video</label>
                            <input type="file" name="video"><br>
                        <label>poster</label>
                            <input type="file" name="poster"><br>

                        <button type="submit" class="btn btn-primary">upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>