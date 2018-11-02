<?php include '../_includes/PHP_include.php'; ?>
<?php include '../_includes/head.php'; ?>
<?php
//insert data

?>
<style>
    .crumps {
        color: cornflowerblue;
    }

</style>
<!-- Fixed navbar -->


<!-- /.navbar -->
<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Login</h1>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <ol class="breadcrumb">
        <li class="crumps"><a href="home">Home</a></li>
        <li class="active">Login</li>
    </ol>
</div>
<section style="align:center;" id="services">
    <div class="container">
        <form class="form-signin" action="" method="post">

            <h2 class="form-signin-heading">Please Login</h2>
            <div class="row">
                <div class="col-md-4 col-xs-10 col-sm-7">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                           required autofocus>
                </div>
                <div class="col-md-8 col-sm-5 col-xs-2"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-10 col-sm-7">

                    <input type="password" id="inputPassword" name="password" class="form-control"
                           placeholder="Password" required>
                </div>
                <div class="col-md-8 col-sm-5 col-xs-2"
                ">
            </div>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        <label>
        </label>
    </div>
    <button class="btn btn-sm btn-primary" style="background-color:#3d84e6;" name="submit_login" type="submit">Sign in
    </button>

    <a href="register">
        <input type="button" class="btn btn-sm btn-primary" style="background-color:#3d84e6;" value="Register">

    </a>
    <br>
    <a href="forget_password" style="margin-left:16%;">Forgot Password?</a>
    <?php if ($notverified) { ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Warning!</strong>Email ID created But Not Registered,Please Check Your EmailID.
        </div>
    <?php } ?>
    <?php if ($notvalid) { ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Failure!</strong> Email Id or Password Incorrect.
        </div>
    <?php }
    $alert_id = 0;
    $alert_message = "";
    $alert_class = "";
    $alert_strong = ""; ?>
    </form>
    </div>
    <!-- /container -->
</section>

<?php include '../_includes/footer.php'; ?>
