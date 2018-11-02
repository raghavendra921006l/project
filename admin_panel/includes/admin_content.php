<!DOCTYPE html>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>admin_panel/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>admin_panel/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>admin_panel/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>admin_panel/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>admin_panel/dist/css/skins/skin-blue.min.css">
    <link rel="icon" href="<?php echo SITE_URL; ?>assets/images/logo.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

          <!-- Morris Charts CSS -->
    <script src="<?php echo SITE_URL; ?>admin_panel/dist/js/html5shiv.min.js"></script>
    <script src="<?php echo SITE_URL; ?>admin_panel/dist/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
  <?php if ($is_active == 'add'|| $is_active == 'update' || $is_active == 'tech'): ?>
    <script src="<?php echo SITE_URL; ?>_pluggins/ckeditor/standard/ckeditor.js"></script>
<?php endif; ?>
