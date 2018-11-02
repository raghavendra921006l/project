<?php include '../_includes/head.php'; ?>
<?php include '../_includes/PHP_include.php'; ?>
<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Forgot Password?</h1>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <ol class = "breadcrumb">
        <li class="crumps"><a href="home">Home</a></li>
        <li class="crumps"><a href="login">Login</a></li>
        <li class="active">Forgot Password?</li>
    </ol></div><hr>
<div class="container">

    <form action="" method="POST" name="Login_Form" class="form-signin">
        <h3 class="form-signin-heading">Enter Your Email:</h3>
        <br>
        <div class="col-xs-4">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
        </div>

        <button class="btn btn-sm btn-primary" style="background-color:#3d84e6;" name="submit_forget_password" value="submit" type="Submit">Submit</button>

    </form>
</div>
<br>
<?php if($alert_id==1){ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
                <div class='<?php echo $alert_class; ?>'>
                    <strong><?php echo $alert_strong; ?> </strong><?php echo $alert_message; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6"></div>
        </div>
    </div>
<?php }
$alert_id=0;
$alert_message="";
$alert_class="alert alert-success";
$alert_strong="";?>
<?php include '../_includes/footer.php'; ?>
