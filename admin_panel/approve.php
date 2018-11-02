<?php include('includes/admin_code.php'); ?>
<?php include('includes/admin_content.php'); ?>
<?php include('includes/sidebar.php'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Approve
                    <small>Control panel</small>
                </h1><br>
                <ol class="breadcrumb">
                    <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Approve</li>
                </ol>
            </section>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#subject">Subject</a></li>
                <li><a data-toggle="tab" href="#questions">Questions</a></li>
                <li><a data-toggle="tab" href="#question_papers">Questions Papers</a></li>
            </ul>

            <div class="tab-content">
                <div id="subject" class="tab-pane fade in active">

                        <form role="form" action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th>Description</th>
                                        <th>Approve</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i=0;while($i<$count_subject){ ?>
                                        <tr>
                                            <td>
                                                <?php echo $i+1;?>
                                            </td>
                                            <td>
                                                <?php echo $result_subject[$i]->name;?>
                                            </td>
                                            <td>
                                                <?php echo substr($result_subject[$i]->description,0,52)."..."; ?>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="subject_approve[]" value="<?php echo $result_subject[$i]->id;?>">
                                            </td>
                                        </tr>
                                        <?php $i++;} ?>

                                    </tbody>
                                    <?php if($count_subject<1)
                                    { ?>
                                        <tr>
                                            <td colspan="4" style="text-align: center;font-weight: bold;">
                                                <h2>No data to Approve</h2></td>
                                        </tr>
                                    <?php }?>
                                </table>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Approve" name="approve">
                            </div>
                        </form>
                        <br>


                </div>
                <div id="questions" class="tab-pane fade">

                        <form action="" method="post">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Short Answer</th>
                                    <th>Long Answer</th>
                                    <th>Approve</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;while($i<$count_question){ ?>
                                    <tr>
                                        <td>
                                            <?php echo $i+1;?>
                                        </td>
                                        <td>
                                            <?php echo $result_question[$i]->question;?>
                                        </td>
                                        <td>
                                            <?php echo substr($result_question[$i]->short_answer,0,16)."..."; ?>
                                        </td>
                                        <td>
                                            <?php echo substr($result_question[$i]->long_answer,0,27)."..."; ?>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="question_approve[]" value="<?php echo $result_question[$i]->id;?>">
                                        </td>
                                    </tr>
                                    <?php $i++;} ?>

                                </tbody>
                                <?php if($count_question<1)
                                { ?>
                                    <tr>
                                        <td colspan="5" style="text-align: center;font-weight: bold;">
                                            <h2>No data to Approve</h2></td>
                                    </tr>
                                <?php }?>
                            </table>
                            <input type="submit" class="btn btn-primary" value="Approve" name="q_approve">
                        </form>
                        <br>
                    </div>

                <div id="question_papers" class="tab-pane fade">
                     
                        <form action="" method="post">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Degree</th>
                                    <th>Subject</th>
                                    <th>Year</th>
                                    <th>Approve</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0;while($i<$count2){ ?>
                                    <tr>
                                        <td>
                                            <?php echo $i+1;?>
                                        </td>
                                        <td>
                                            <?php echo $result2[$i]->degree;?>
                                        </td>
                                        <td>
                                            <?php echo substr($result2[$i]->subject,0,26); ?>
                                        </td>
                                        <td>
                                            <?php echo substr($result2[$i]->year,0,10); ?>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="question_paper_approve[]" value="<?php echo $result2[$i]->id;?>">
                                        </td>
                                    </tr>
                                    <?php $i++;} ?>

                                </tbody>
                                <?php if($count2<1)
                                { ?>
                                    <tr>
                                        <td colspan="5" style="text-align: center;font-weight: bold;">
                                            <h2>No data to Approve</h2></td>
                                    </tr>
                                <?php }?>
                            </table>
                            <input type="submit" class="btn btn-primary" value="Approve" name="que_approve">
                        </form>
                        <br>
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