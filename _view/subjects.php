<?php include 'subject_route.php'; ?>
<?php include '../_includes/PHP_include.php'; ?>
<?php include '../_includes/head.php'; ?>
    <!-- /.navbar -->
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1><?php echo $result1[0]->name; ?></h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <ol class="breadcrumb">
            <li class="crumps"><a href="<?php echo SITE_URL . "home"; ?>">Home</a></li>
            <li class="crumps"><a href="<?php echo SITE_URL . "allsubjects"; ?>">Subjects</a></li>
            <li class="active">
                <?php echo $result1[0]->name . " Questions Introduction"; ?>
            </li>

        </ol>
    </div>
    <br>

    <div id="courses">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if ($count < 1) {
                        echo '<h2 class="" style="color:#3d84e6;padding-left:8em;">No Question To Display</h2>';
                    }

                    ?>
                    <?php
                    $i = 0;
                    while ($i < $count) {
                        $question_id = $result[$i]->id;
                        $subject_id = $result[$i]->subject_id;
                        $link = SITE_URL . "sub/" . $subject_id . "/que/" . $question_id;
                        ?>
                        <div class="panel question panel-primary">
                            <div class="panel-heading">
                                <a href="<?php echo $link; ?>"><h4
                                        class="white-text"><?php echo $result[$i]->question; ?> </h4></a>
                            </div>
                            <div class="panel-body border-primary">
                                <span style="display:inline"
                                      class="line-clamp line-clamp-3"><?php echo $result[$i]->short_answer; ?></span>...
                                <a class="read-more" href="<?php echo $link; ?>">Read more</a>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                    ?>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">

                    <!---->
                    <div class="panel side-panel panel-secondary">
                        <div class="panel-heading">
                            <h4 class="white-text">Related Subjects </h4>
                        </div>
                        <div class="panel-body border-secondary">

                            <ul class="list-group">
                                <?php $i = 0;
                                while ($i < $count_all_sub) { ?>
                                    <a href="<?php echo SITE_URL . "sub/" . $result_all_Sub[$i]->id; ?>">
                                        <li class="list-group-item"><span
                                                class="badge">12</span><?php echo $result_all_Sub[$i]->name; ?></li>
                                    </a>
                                    <?php $i++;
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- container -->
<?php include '../_includes/footer.php'; ?>