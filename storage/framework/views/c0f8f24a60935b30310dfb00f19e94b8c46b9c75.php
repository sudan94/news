<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create News</h1>
        </div>
    </div>
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box-body">
                    <form method="post" action="/showNews/<?php echo $__env->yieldContent('editId'); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <?php $__env->startSection('editMethod'); ?>
                        <?php echo $__env->yieldSection(); ?>
                        <div class="form-group">
                            <label for="newsTitle">News Title:</label>
                            <input type="text" class="form-control" id="newsTitle" name="newsTitle"
                                   placeholder="Enter Title" value="<?php echo $__env->yieldContent('editTitle'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="author">Author Name:</label>
                            <input type="text" class="form-control" id="author" name="author"
                                   placeholder="Author Name" value="<?php echo $__env->yieldContent('editAuthor'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" id="category" name="category"
                                    value="<?php echo $__env->yieldContent('editCategory'); ?>">
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="controls">
                            <div class="entry">
                                <label>Select image to upload:</label>
                                <input class="btn btn-primary" name="file[]" type="file"
                                       value="<?php echo $__env->yieldContent('editPhoto'); ?>"><br/>
                                <div class="form-group">
                                    <label for="newsBody">News Content:</label>
                                    <textarea class="form-control ckeditor" rows="5" name="newsBody[]"
                                              value=""><?php echo $__env->yieldContent('editBody'); ?></textarea>
                                </div>

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

<?php echo $__env->make('dashboard.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>