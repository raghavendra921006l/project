<?php


//select questions


//end of select Questions

?>

<?php include ('includes/admin_content.php'); ?>

  <?php include('includes/sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Question Papers
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Your Info</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <table class="table">
            <thead>
            <tr>
              <th>S.No.</th>
              <th>Question Paper</th>

            </tr>
            </thead>
            <tbody>
            <?php if($count>0){
              $i=0;
              while($i<$count){
                if($result[$i]->active=="1"){
                  $colour="success";
                } else{
                  $colour="danger";
                }?>
                <tr class="<?php echo $colour; ?>">
                  <td><?php echo $i+1; ?></td>
                  <td><?php echo $result[$i]->degree.' '.$result[$i]->subject.' '.$result[$i]->year; ?></td>

                </tr>
                <?php  $i++;}}
            else{?>
              <tr class="danger">
                <td></td>
                <td>No Data To Display</td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

        </div>
      </div>
      <!-- /.row -->
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
