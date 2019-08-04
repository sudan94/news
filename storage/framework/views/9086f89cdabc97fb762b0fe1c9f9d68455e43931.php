<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="/index"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                <?php echo e(Auth::user()->name); ?><b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="/users/<?php echo e(Auth::user()->id); ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar -->
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
                    <a href=<?php echo e(url('dashboard')); ?> class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <li><a href="<?php echo e(url('newsCategory')); ?>"><i class='fa fa-link'></i>
                            <span><?php echo e(trans('News category')); ?></span></a>
                    </li>
                <?php endif; ?>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <li><a href="<?php echo e(url('users')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('Users')); ?></span></a></li>
                <?php endif; ?>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> News Items<span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo e(url('createNews')); ?>">Create News</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('showNews')); ?>"> Show News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Videos<span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo e(url('createVideo')); ?>">Upload Video</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('videoList')); ?>"> Video list</a>
                        </li>
                    </ul>
                </li>
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
</nav>