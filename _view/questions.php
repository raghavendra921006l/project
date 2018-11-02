<?php include 'questions_route.php'; ?>
<?php include '../_includes/head.php'; ?>
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
            <?php $link = SITE_URL . "sub/" . $subject_id; ?>
            <li class="crumps"><a
                    href="<?php echo $link; ?>"><?php echo $result1[0]->name . " Questions Introduction"; ?></a></li>
            <li class="active">
                <?php echo $result1[0]->name . " Questions Brief"; ?>
            </li>

        </ol>
    </div>
    <br>
    <div id="courses">
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="panel panel-primary">
                        <?php if ($count >= 1) { ?>
                            <div class="panel-heading">
                                <h4 class="white-text"><?php echo $result[0]->question . "?"; ?></h4>
                            </div>
                            <div class="panel-body border-primary">
                                <p>
                                    <?php echo $result[0]->long_answer; ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                    <div class="panel side-panel panel-secondary">
                        <div class="panel-heading">
                            <h4 class="white-text">Related Questions</h4>
                        </div>
                        <div class="panel-body border-secondary">

                            <ul class="list-group">
                                <?php if($count_relate_sub<=0) {
                                    echo '<h4 align="center"> No More Questions</h4>';
                                }  ?>
                                <?php $i = 0;
                                while ($i < $count_relate_sub) { ?>
                                    <a href="<?php echo SITE_URL . "sub/" . $subject_id . "/que/" . $result_related_Sub[$i]->id; ?>">
                                        <li class="list-group-item"><?php echo $result_related_Sub[$i]->question; ?></li>
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
    </div>
<?php include '../_includes/footer.php'; ?>