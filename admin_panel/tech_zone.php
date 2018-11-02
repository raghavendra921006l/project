<?php include('includes/admin_code.php'); ?>
<?php include('includes/admin_content.php'); ?>
<?php include('includes/sidebar.php'); ?>

<script type="text/javascript">
    function fetch_select_video_data(val) {
        $.ajax({
            type: 'post',
            url: 'videofetch.php',
            data: {
                get_option: val
            },
            success: function(value) {
                var data = value.split(",");
                var id_spaceout = data[0].replace(/\s/g, '');
                $('#video_id').val(id_spaceout);
                $('#video_title').val(data[1]);
                $('#video_url').val(data[2]);
            }

        });
    }
    </script>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Technical Zone
                <small>Control panel</small>
            </h1>
            <br>
            <ol class="breadcrumb">
                <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Tech Zone</li>
            </ol>
        </section>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#add">Add</a></li>
            <li><a data-toggle="tab" href="#delete">Delete</a></li>
            <li><a data-toggle="tab" href="#update">Update</a></li>
        </ul>
        <div class="tab-content">
            <div id="add" class="tab-pane fade in active">
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action='' method='POST' autocomplete="off">
                            <div class="form-group">
                                <input class="form-control" name="label" placeholder="Enter Labels">
                            </div>

                            <div class="form-group">
                                <textarea placeholder="Enter Subject Name" class="form-control ckeditor"
                                          name="desc"></textarea>
                            </div>
                            </br>
                            <div class="form-group">
                                <button type="submit" type="submit" name="submit_insert_video" class="btn btn-primary">Add
                                    Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="delete" class="tab-pane fade">
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action='' method='POST' autocomplete="off">
                            <div class="form-group">
                                <label>
                                    <br>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Select Tech Video</label>

                                <select class="form-control" name="video_title" id="subjectname">
                                    <?php $i = 0;
                                    while ($i < $count_video) { ?>
                                        <option value="<?php echo $result_tech[$i]->id; ?>">
                                            <?php echo $result_tech[$i]->title; ?>
                                        </option>
                                        <?php $i++;
                                    } ?>
                                </select>
                            </div>
                            <button type="submit" type="submit" name="submit_delete_video" class="btn btn-primary">Delete
                                Post
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            <div id="update" class="tab-pane fade">
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <form role="form" action='' method='POST' autocomplete="off">
                            <div class="form-group">
                                <label>
                                    <h2>Select Video </h2></label>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="select_subject" id="select_subject" onchange="fetch_select_video_data(this.value);">
                                    <option disabled selected="selected">Select Video</option>
                                    <?php $i=0; while($i<$count_video){ ?>
                                        <option "<?php echo $result_tech[$i]->id;?>">
                                        <?php echo $result_tech[$i]->title;?>
                                        </option>
                                        <?php $i++;} ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form role="form" action='' method='POST' autocomplete="off">
                            <div class="form-group">
                                <label>
                                    <h2>Update Video </h2></label>
                                <input class="form-control" name="video_title" id="video_title" placeholder="Update Video Title">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="video_url" id="video_url" placeholder="Update Video Url">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="video_id" id="video_id" placeholder="Update Video ID" style="display: none;">
                            </div>
                            <button type="submit" type="submit" name="update_video" class="btn btn-primary pull-right">Update Post</button>
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
