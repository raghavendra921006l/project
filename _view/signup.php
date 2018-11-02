<?php include '../_includes/head.php'; ?>
<?php include '../_includes/PHP_include.php'; ?>
        <style>
            input,
            label {
                margin-bottom: 10px;
            }

            .crumps {
                color: cornflowerblue;
            }
            .custom-height-modal {
                max-height: 100px;

}
        </style>
                <header id="head" class="secondary">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1>Register</h1>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="container">
                    <ol class="breadcrumb">
                        <li class="crumps"><a href="home">Home</a></li>
                        <li class="active">Register</li>

                    </ol>
                </div>
                <hr>

                <div class="container">

                    <form class="form-signin" action="" method="POST" autocomplete="off" id="sineup_form">
                        <h2 class="form-signin-heading" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif;"></h2>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="firstname"><b style="font-size:16px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">First Name</b></label>
                                <div class="col-md-4 col-lg-4">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                                </div>
                            </div>
                        </div>
                        <!--end of first name-->
                        <!--last name-->
                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="lastname"><b style="font-size:16px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Last Name</b></label>
                                <div class="col-md-4 col-lg-4">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>

                        <!--end of last name-->

                        <!--E-mail start-->
                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email"><b style="font-size:16px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Email</b></label>
                                <div class="col-md-4 col-lg-4">
                                    <input type="email" class="form-control" id="email" name="emailid" placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <!--E-mail End-->

                        <!--Password start-->
                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="password"><b style="font-size:16px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Password</b></label>
                                <div class="col-md-4 col-lg-4">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <!--Password end-->


                        <!--Retype Password start-->
                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="retype_password"><b style="font-size:16px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;">Retype Password</b></label>
                                <div class="col-md-4 col-lg-4">
                                    <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="Retype Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="password"></label>
                                <div class="col-md-4 col-lg-4">
                                    <div class="g-recaptcha" data-sitekey="6LfS5AYUAAAAABB470SHkiwmHtaut7sb6fBKMHa1"></div>
                                </div>
                            </div>
                        </div>
                        <!--Retype Password end-->
                        <button class="btn btn-sm btn-primary" style="background-color:#3d84e6;" type="submit" id="submit" name="submit_register">Register</button><br><br>

<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <?php if($alert_id==1){  ?>
                                    <div class='<?php echo $alert_class; ?>'>
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $alert_strong; ?></strong> <?php echo $alert_message; ?>
                                    </div>
                                    <?php  }
                                $alert_id = 0;
                                $alert_message = "";
                                $alert_class = "";
                                $alert_strong = "";?>
                            </div>
                        </div>
                    </form>
                </div>
            <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="max-width: 390px;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Warning!</h4>
        </div>
        <div class="modal-body custom-height-modal">
          <b><p>Password and Retype Password Doesnot Match</p></b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

                <!-- /container -->
<script src='https://www.google.com/recaptcha/api.js'></script>
                <?php include '../_includes/footer.php'; ?>

            