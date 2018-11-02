 <?php include('includes/admin_code.php'); ?>
<?php include('includes/admin_content.php'); ?>
  <?php include('includes/sidebar.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Add Content
          <small>Control panel</small>
        </h1><br>
        <ol class="breadcrumb">
          <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Add</li>
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
              <form role="form" name="addsubjectform" action='' method='POST' autocomplete="off">
                <div class="form-group">
                  <label>
                    <h2>Add Subject </h2></label>
                  <input class="form-control" placeholder="Enter Question" method="post" name="subname">

                </div>
                <div class="form-group">
                  <textarea class="ckeditor" name="subdesc" placeholder="Enter Subject Description" value="" autocomplete="off"></textarea>
                </div>
                <button type="submit" type="submit" name="submitsubject" class="btn btn-primary">Add Subject</button>
              </form><br>
            </div>
          </div>
        </div>
        <div id="questions" class="tab-pane fade">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" action='' method='POST' autocomplete="off">
                <div class="form-group">
                  <label>
                    <h2>Add Question</h2></label>
                  <input class="form-control" placeholder="Enter Question" method="post" name="question">
                </div>
                <div class="form-group">
                  <textarea rows="3" cols="50" class="form-control" placeholder="Enter Short Answer" name="short_answer"></textarea>
                </div>
                <div class="form-group">
                  <textarea rows="5" cols="50" class="ckeditor" placeholder="Enter Long Answer" name="long_answer"></textarea>
                </div>
                <div class="form-group">
                  <label>Select Subject</label>
                  <select class="form-control" name="subject_selectbox">
                    <?php $i=0;
                    while($i<$count_subject)
                    {
                      ?>
                      <option value="<?php echo $result_subject[$i]->name; ?>">
                        <?php echo $result_subject[$i]->name; ?>
                      </option>
                      <?php

                      $i++;
                    }
                    ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submitquestion">Add Question</button>
              </form><br>
            </div>
          </div>
        </div>
        <div id="question_papers" class="tab-pane fade">
          <h3>Add Old Question Papers</h3>
          <br>
          <div class="row">
            <div class="col-lg-6">
              <form role="form" action='' enctype="multipart/form-data" method='POST' autocomplete="off">
                <div class="form-group">
                  <input class="form-control" name="label" placeholder="Enter Labels">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="Enter Subject Name">
                </div>
                </br>
                <div class="form-group">
                  <input class="form-control" name="year" placeholder="Enter Year">
                </div>
                </br>
                <div class="form-group">
                  <input type="file" name="paper" id="paper"> </div>
                <div class="form-group">
                  <button type="submit" type="submit" name="submitquestionpaper" class="btn btn-primary">Add Question Paper</button>
                </div>
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
