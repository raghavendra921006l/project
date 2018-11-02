<?php include('includes/admin_code.php'); ?>
  <script type="text/javascript">
    function fetch_select(val) {
      $.ajax({
        type: 'post',
        url: 'deletefetch.php',
        data: {
          get_option: val
        },
        success: function(response) {
          document.getElementById("new_select").innerHTML = response;

        }
      });
    }
  </script>
<?php include('includes/admin_content.php'); ?>
  <?php include('includes/sidebar.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Delete Content
          <small>Control panel</small>
        </h1><br>
        <ol class="breadcrumb">
          <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Delete</li>
        </ol>
      </section>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#subject">Subject</a></li>
        <li><a data-toggle="tab" href="#questions">Questions</a></li>
        <li><a data-toggle="tab" href="#question_papers">Question Papers</a></li>
      </ul>

      <div class="tab-content">
        <div id="subject" class="tab-pane fade in active">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" action='' method='POST' autocomplete="off">
                <div class="form-group">
                  <label>
                    <h2>Delete Subject </h2></label></div>
                <div class="form-group">
                  <label>Select Subject</label>

                  <select class="form-control" name="subjectname" id="subjectname">

                    <?php $i=0;while($i<$count_subject){?>
                      <option value="<?php echo $count;?>">
                        <?php echo $result_subject[$i]->name;?>
                      </option>
                      <?php $i++; }?>
                  </select>
                </div>
                <button type="submit" type="submit" name="submit_delete_subject" class="btn btn-primary">Delete Subject</button>
              </form>
            </div>

          </div>
        </div>

      <div id="questions" class="tab-pane fade">
        <div class="row">
          <div class="col-lg-6">
            <br>
            <form role="form" action='' method='POST' autocomplete="off" name="delete_question" id="delete_question">
              <div class="form-group">
                <label>Select Subject</label>

                <select class="form-control" name="select_subject" id="select_subject" onchange="fetch_select(this.value);">
                  <option disabled selected="selected">Select Subject</option>
                  <?php $i=0;while($i<$count_subject){?>
                    <option value="<?php echo $result_subject[$i]->id; ?>">
                      <?php echo $result_subject[$i]->name; ?>
                    </option>
                    <?php $i++; } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Select Question</label>
                <select class="form-control" name="new_select" id="new_select">
                  <option></option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary" name="submit_delete_question">Delete Question</button>
            </form>
          </div>
        </div>
      </div>
      <div id="question_papers" class="tab-pane fade">
        <h3>Delete Old Question Papers</h3>
        <br>
        <div class="row">
          <div class="col-lg-6">
            <form role="form" action='' method='POST' autocomplete="off">
              <div class="form-group">
                <label>Select Question</label>
                <select class="form-control" name="select_oldpaper">
                  <?php $i=0;while($i<$count_que){?>
                    <option value="<?php echo $result_que[$i]->id?>">
                      <?php echo $result_que[$i]->degree." ".$result_que[$i]->subject." ".$result_que[$i]->year; ?>
                    </option>
                    <?php $i++;}?>
                </select>
              </div>
              <button type="submit" type="submit" name="submit_delete_paper" class="btn btn-primary">Delete Paper</button>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- /.content comes hgere-->
  </div>
  <!-- /.content-wrapper -->
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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
