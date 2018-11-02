<?php
error_reporting(0);
$url = $_SERVER['REQUEST_URI'];
$tokens = explode('/', $url);
$is_active = $tokens[sizeof($tokens) - 1];
if ($_SESSION["sess_user"] == 'raghavendra921006l@gmail.com' || $_SESSION["name"] == 'Shyam Sunder') {
    $admin = 1;
} else {
    $admin = 0;
}
try {
    $data_id = new Database;
    $query_id = "SELECT * FROM login where email=:user_email";
    $data_id->query($query_id);
    $data_id->bind(':user_email', $_SESSION['sess_user']);
    $result_id = $data_id->resultset();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<header class="main-header">

    <!-- Logo -->
    <a href="index" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b><?php echo $result_id[0]->firstname[0];?></b><?php echo $result_id[0]->lastname[0];?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo $result_id[0]->firstname; ?></b><?php echo " " . $result_id[0]->lastname; ?></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo "../assets/images/profile/" . $result_id[0]->profile_photo; ?>"
                             class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $_SESSION["name"]; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="<?php echo "../assets/images/profile/" . $result_id[0]->profile_photo; ?>"
                                 class="img-circle" alt="User Image">

                            <p>
                                <?php echo $_SESSION["name"]; ?>
                                <small>Member since <?php echo formatDate($result_id[0]->register_date); ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="profile" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo "../assets/images/profile/" . $result_id[0]->profile_photo; ?>" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $result_id[0]->firstname . " " . $result_id[0]->lastname; ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="index">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php echo ($is_active == 'profile') ? 'active' : '' ?>">
                <a href="profile"><i class="fa fa-user fa-1x"></i> <span>Profile</span></a>
            </li>
            <li class="<?php echo ($is_active == 'add') ? 'active' : '' ?>">
                <a href="add"><i class="fa fa-plus" aria-hidden="true"></i><span>Add</span></a>
            </li>
            <li class="<?php echo ($is_active == 'delete') ? 'active' : '' ?>"
                <?php if ($admin != 1){ ?>style="display:none;"
                <?php } ?>>
                <a href="delete"><i class="fa fa-times" aria-hidden="true"></i> <span>Delete</span></a>
            </li>

            <li class="<?php echo ($is_active == 'update') ? 'active' : '' ?>"
                <?php if ($admin != 1){ ?>style="display:none;"
                <?php } ?>>
                <a href="update"><i class="fa fa-fw fa-edit"></i> <span>Update</span></a>
            </li>

            <li class="<?php echo ($is_active == 'view') ? 'active' : '' ?>"
                <?php if ($admin != 1){ ?>style="display:none;"
                <?php } ?>>
                <a href="view"><i class="fa fa-fw fa-edit"></i> <span>View</span></a>
            </li>

            <li class="<?php echo ($is_active == 'tech') ? 'active' : '' ?>"
                <?php if ($admin != 1){ ?>style="display:none;"
                <?php } ?>>
                <a href="tech"><i class="fa fa-video-camera"></i><span>Tech Zone</span></a>
            </li>


            <li class="<?php echo ($is_active == 'approve') ? 'active' : '' ?>"
                <?php if ($admin != 1){ ?>style="display:none;"
                <?php } ?>>
                <a href="approve"><i class="fa fa-check-circle"></i> <span>Approve</span></a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
