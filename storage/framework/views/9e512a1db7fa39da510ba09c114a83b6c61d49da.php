<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Photo Features News</h1>
        </div>
    </div>

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box-body">
                    <form method="post" action="/photoUpload" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <?php $__env->startSection('editMethod'); ?>
                        <?php echo $__env->yieldSection(); ?>


                        <h3> This is for multiple photo upload:</h3><br/><br/>
                        <div class="controls">
                            <div class="entry">
                                <input class="btn btn-primary" name="photo[]" type="file"><br/>

                                <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                            <span class="glyphicon glyphicon-plus"></span>
                </button>
                </span><br/><br/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
                <!-- /.box-body -->
                <!-- /.box -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<style>
    .entry:not(:first-of-type) {
        margin-top: 10px;
    }

    .glyphicon {
        font-size: 12px;
    }
</style>

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>