<?php include('includes/admin_code.php'); ?>
  <style type="text/css">
    .text {
      position: relative;
      bottom: 30px;
      left: 0px;
      visibility: hidden;
    }

    .bgimg:hover .text {
      padding-left: 18%;
      visibility: visible;
      background-color: #404040;
      width: 200px;
      height: 30px;
    }

    p a,
    p a:hover {
      color: white;
    }

  </style>
<?php include('includes/admin_content.php'); ?>
  <?php include('includes/sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Profile
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Profile</li>
      </ol>
    </section>
    <!--Modal Class-->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Select the Profile Picture:</h4>
          </div>
          <div class="modal-body">
            <p>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <input id="imgFile" type="file" name="profile_photo" id="profile_photo">
                </div>

              </div>


            </p>
          </div>
          <div class="modal-footer">
            <button type="submit" id="imageSubmit" class="btn btn-primary">Submit</button>
            </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <!--end modal class-->
    <!-- Main content -->

    <section class="content">
      <div class="row" style="margin-right:44px;">
        <div class="col-md-7">
          <!--Profile name-->
          <div class="row">
            <div class="col-md-3">Profile Name:</div>

            <div class="col-md-4"><b><?php echo $name; ?></b></div>
          </div>
          <br>
          <!--end of Profile name-->

          <div class="row">
            <div class="col-md-3">Email ID:</div>

            <div class="col-md-4"><b><?php echo $emailid; ?></b></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">Password:</div>
            <div class="col-md-8">
              <form action="" method="post">
                <input type="password" class="form-control"  placeholder="Enter Old Password" name="old_pwd" id="old_pwd" required>
                <input type="password" class="form-control"  placeholder="Enter Password" name="pwd" id="pwd" required>
                <input type="password" class="form-control" placeholder="Retype Password" name="retype_pwd" id="retype_pwd"> </div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-5">
              <br>
              <button type="submit" class="btn btn-success" id="pwd_button" name="pwd_button">Update Password</button>
            </div>
          </div>
          </form>
        </div>
        <!--end of user info column-->
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <?php  if(!file_exists("../assets/images/profile/".$result_id[0]->profile_photo)){ ?>
          <div class="bgimg"><img id="imgPrev" src="../assets/images/profile/m.jpg" style="width:200px;height:200px">
            <p class="text">
              <?php } else{  ?>
              <div class="bgimg"><img src=<?php echo "../assets/images/profile/" . $result_id[0]->profile_photo;?> style="width:200px;height:200px">
            <p class="text">
              <?php   } ?>

              <a href="#" data-toggle="modal" data-target="#myModal">Change Profile  </p></div></div>
        <!--end of profile photo column-->

      </div>
      <!--end of profile row-->
      <div class="row">
        <div class="col-md-s"></div>
        <div class="col-md-5">
          <?php
          if($pwd_change)
          {?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Password Changed Successfully.
            </div>
            <?php
          }?>
          <?php if($success){  ?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Profile Picture Changed Successfully.
            </div>
          <?php } ?>

          <?php if($error=true &&  empty($errors)==false){ ?>
            <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Danger!</strong>
              <?php print_r($errors); ?>.
            </div>

          <?php  } ?>

        </div>
      </div>
      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#imgPrev').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imageSubmit").click(function () {
    readURL($("#imageFile"));
  });

</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
