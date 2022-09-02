<?php include 'include/header.php'?>

    <div class="sidebar">
        <div class="sidebar-header">
            <div>
                <a href="../index.html" class="sidebar-logo"><span>Sprout Seven </span></a>
                <!-- <small class="sidebar-logo-headline">Responsive Dashboard Template</small> -->
            </div>
        </div>
        <!-- sidebar-header -->
		<?php include 'include/nav-bar.php'?>
        <!-- sidebar-body -->
    </div>
    <!-- sidebar -->

    <div class="content content-page">
        <div class="header">
            <div class="header-left">
                <a href="" class="burger-menu"><i data-feather="menu"></i></a>

                <div class="header-search">
                    <i data-feather="search"></i>
                    <input type="search" class="form-control" placeholder="What are you looking for?">
                </div>
                <!-- header-search -->
            </div>
            <!-- header-left -->

            <div class="header-right">
                <a href="" class="header-help-link"><i data-feather="help-circle"></i></a>
                <div class="dropdown dropdown-notification">
                    <a href="" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <h6>Notifications</h6>
                            <a href=""><i data-feather="more-vertical"></i></a>
                        </div>
                        <!-- dropdown-menu-header -->
                        <div class="dropdown-menu-body">
                            <a href="" class="dropdown-item">
                                <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                                <div class="dropdown-item-body">
                                    <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                                    <span>5 hours ago</span>
                                </div>
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                                <div class="dropdown-item-body">
                                    <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                                    <span>8 hours ago</span>
                                </div>
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                                <div class="dropdown-item-body">
                                    <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                                    <span>a day ago</span>
                                </div>
                            </a>
                            <a href="" class="dropdown-item">
                                <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                                <div class="dropdown-item-body">
                                    <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                                    <span>2 days ago</span>
                                </div>
                            </a>
                        </div>
                        <!-- dropdown-menu-body -->
                        <div class="dropdown-menu-footer">
                            <a href="">View All Notifications</a>
                        </div>
                    </div>
                    <!-- dropdown-menu -->
                </div>
                <div class="dropdown dropdown-loggeduser">
                    <a href="" class="dropdown-link" data-toggle="dropdown">
                        <div class="avatar avatar-sm">
                            <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                        </div>
                        <!-- avatar -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <div class="media align-items-center">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                                </div>
                                <!-- avatar -->
                                <div class="media-body mg-l-10">
                                    <h6>Louise Kate Lumaad</h6>
                                    <span>Administrator</span>
                                </div>
                            </div>
                            <!-- media -->
                        </div>
                        <div class="dropdown-menu-body">
                            <a href="" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                            <a href="" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>
                            <a href="" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>
                            <a href="" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a>
                            <a href="<?php echo base_url();?>index.php/Admin/Logout" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
                        </div>
                    </div>
                    <!-- dropdown-menu -->
                </div>
            </div>
            <!-- header-right -->
        </div>
        <!-- header -->
        <!--content body-->
		<?php echo $content ?>
        <!-- content-body -->
    </div>
    <!-- content -->
	<?php include 'include/footer.php'?>
    
</body>

</html>
