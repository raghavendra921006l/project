<?php include('includes/admin_code.php'); ?>
<?php include('includes/admin_content.php'); ?>
    <?php include('includes/sidebar.php'); ?>
     <script type="text/javascript">
        function fetch_select(val) {
            $.ajax({
                type: 'post',
                url: 'updatefetch.php',
                data: {
                    get_option: val
                },
                success: function(value) {
                    var data = value.split(",");
                    var id_spaceout = data[0].replace(/\s/g, '');
                    $('#subid').val(id_spaceout);
                    $('#subname').val(data[1]);
                    $('#subdesc').val(data[2]);
                }

            });
        }

        function fetch_select_que(val) {
            $.ajax({
                type: 'post',
                url: 'update_fetch_que.php',
                data: {
                    get_option: val
                },
                success: function(value) {

                    document.getElementById("select_que").innerHTML = value;

                }

            });
        }

        function fetch_select_que_detail(val) {
            $.ajax({
                type: 'post',
                url: 'update_fetch_que_detail.php',
                data: {
                    get_que: val
                },
                success: function(value) {
                    var data = value.split("@");
                    var id_spaceout = data[0].replace(/\s/g, '');
                    $('#que_id').val(id_spaceout);
                    $('#que').val(data[1]);
                    $('#short_answer').val(data[2]);
                    $('#long_answer').val(data[3]);

                }

            });
        }

    </script>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Update Content
                    <small>Control panel</small>
                </h1><br>
                <ol class="breadcrumb">
                    <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Update</li>
                </ol>
            </section>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#subject">Subject</a></li>
                <li><a data-toggle="tab" href="#questions">Questions</a></li>
            <!--    <li><a data-toggle="tab" href="#question_papers">Question Papers</a></li>-->
            </ul>

            <div class="tab-content">
                <div id="subject" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <form role="form" action='' method='POST' autocomplete="off">
                                <div class="form-group">
                                    <label>
                                        <h2>Select Subject </h2></label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="select_subject" id="select_subject" onchange="fetch_select(this.value);">
                                        <option disabled selected="selected">Select Subject</option>
                                        <?php $i=0; while($i<$count_update_subjects){ ?>
                                            <option "<?php echo $result_update_subjects[$i]->id;?>">
                                            <?php echo $result_update_subjects[$i]->name;?>
                                            </option>
                                            <?php $i++;} ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form role="form" action='' method='POST' autocomplete="off">
                                <div class="form-group">
                                    <label>
                                        <h2>Update Subject </h2></label>
                                    <input class="form-control" name="subname" id="subname" placeholder="Update Subject Name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="subdesc" id="subdesc" placeholder="Update Subject Description">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="subid" id="subid" placeholder="Update Subject ID" style="display: none;">
                                </div>
                                <button type="submit" type="submit" name="update_subject" class="btn btn-primary pull-right">Update Subject</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div id="questions" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <form role="form" action='' method='POST' autocomplete="off">
                                <div class="form-group">
                                    <label>
                                        <h2> </h2></label>
                                </div>
                                <div class="form-group">
                                    <label>Select Subject</label>
                                    <select class="form-control" onchange="fetch_select_que(this.value);">
                                        <option disabled selected="selected">Select Subject</option>
                                        <?php $i=0;while($i<$count_update_subjects){?>
                                            <option value="<?php echo $result_update_subjects[$i]->id;?>">
                                                <?php echo $result_update_subjects[$i]->name;?>
                                            </option>
                                            <?php $i++;}?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Question</label>
                                    <select class="form-control" name="select_que" id="select_que" onchange="fetch_select_que_detail(this.value);">
                                        <option disabled selected="selected">Select Question</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form role="form" action='' method='POST' autocomplete="off">
                                <div class="form-group">
                                    <label> </label>

                                </div>
                                <div class="form-group">
                                    <label> </label>

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Question" name="que" id="que">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter id" name="que_id" id="que_id" style="display: none;">
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" cols="50" class="form-control" placeholder="Enter Short Answer" name="short_answer" id="short_answer"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" cols="50" class="form-control" placeholder="Enter Long Answer" name="long_answer" id="long_answer"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" name="update_question" name="update_question">Update Question</button>
                            </form>
                        </div>

                    </div>
                </div>
           <!--     <div id="question_papers" class="tab-pane fade">
                    <h3>Add Old Question Papers</h3>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action='' method='POST' autocomplete="off">
                                <div class="form-group">
                                    <input class="form-control" name="subname" placeholder="Enter Labels">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="subname" placeholder="Enter Subject Name">
                                    </br>
                                    <input class="form-control" name="subname" placeholder="Enter Year">
                                    </br>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                                <button type="submit" type="submit" name="submitsubject" class="btn btn-primary pull-right">Add Subject</button>
                            </form>
                        </div>
                    </div>
                </div>-->
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
