<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
            </li>
            <li>
                <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li><a href="<?php echo e(url('newsCategory')); ?>"><i class='fa fa-link'></i>
                    <span><?php echo e(trans('News category')); ?></span></a>
            </li>

            <li><a href="<?php echo e(url('users')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('Users')); ?></span></a></li>

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('News Item')); ?></span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('createNews')); ?>"><?php echo e(trans('Create News')); ?></a></li>
                    <li><a href="<?php echo e(url('showNews')); ?>"><?php echo e(trans('Show News')); ?></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Videos')); ?></span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('createVideo')); ?>"><?php echo e(trans('Upload Video')); ?></a></li>
                    <li><a href="<?php echo e(url('videoList')); ?>"><?php echo e(trans('Video List')); ?></a></li>
                </ul>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</div>