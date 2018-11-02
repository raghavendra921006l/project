<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author" content="webThemez.com">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo SITE_URL; ?>assets/images/logo.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>assets/css/da-slider.css"/>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo SITE_URL . "css/line_clamp.css"; ?>">
    <?php if ($is_active == 'home' || $is_active == ''): ?>
        <link rel="stylesheet" href="<?php echo SITE_URL . "assets/css/js-image-slider.css" ?>">
    <?php endif; ?>
    <?php if ($is_active == 'tech'): ?>
        <link rel="stylesheet" href="<?php echo SITE_URL . "assets/css/style.css"; ?>">
    <?php endif; ?>

    <style type="text/css">
        a,
        a:hover {
            text-decoration: none;
            color: inherit;
        }

        .crumps {
            color: cornflowerblue;
        }

    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo SITE_URL; ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo SITE_URL; ?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Fixed navbar -->

<style>
    button {
        border: none;
        padding-left: 0px;
        background: none;
    }

    #list:hover {
        background-color: #3d84e6;
    }

    .navbar-inverse .navbar-nav > .active > a {
        background-color: #3d84e6;
        color: white;
    }

    .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > li > a:hover {
        color: #fff !important;
    }
</style>
<div class="header navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href='<?php echo SITE_URL; ?>'>

                <img src="<?php echo SITE_URL . "assets/images/logo.png"; ?>" style="height: 70px;" alt="ELearning"></a>
        </div>
        <div class="navbar-collapse collapse">
            <div class="col-sm-3 col-md-3 pull-right">
                <form class="navbar-form" role="search" action="<?php echo SITE_URL; ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-info" type="submit"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-nav pull-right mainNav">
                <li id="list" class="<?php echo ($is_active == 'home' || $is_active == '') ? 'active' : '' ?>"><a
                        href="<?php echo SITE_URL; ?>">Home</a></li>
                <li id="list" class="<?php echo ($is_active == 'question_paper') ? 'active' : '' ?>"><a
                        href="<?php echo SITE_URL . "question_paper"; ?>">Question Papers</a></li>

                <li id="list" class="<?php echo ($is_active == 'tech') ? 'active' : '' ?>"><a
                        href="<?php echo SITE_URL . "tech"; ?>">Tech Zone</a></li>
<!--
                <li id="list" class="<?php echo ($is_active == 'frequently_asked_que') ? 'active' : '' ?>"><a
                        href="<?php echo SITE_URL . "frequently_asked_que"; ?>">FAQ</a></li>-->

                <li id="list" class="<?php echo ($is_active == 'contacts') ? 'active' : '' ?>"><a
                        href="<?php echo SITE_URL . "contacts"; ?>">Contact</a></li>
            </ul>

            <!--/.nav-collapse -->
        </div>
    </div>
</div>