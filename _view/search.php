<?php include '../_includes/head.php'; ?>
    <!-- /.navbar -->
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Search: <?php echo $query?></h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <ol class="breadcrumb">
            <li class="crumps"><a href="home">Home</a></li>
            <li class="active">Search:
                <?php echo $query; ?>
            </li>

        </ol>
    </div>
    <br>
    <div class="container">
        <?php if (isset($results) && !empty($results)): ?>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <?php foreach ($results as $ques): ?>
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="white-text"><?php echo $ques->question; ?></h4>
                            </div>
                            <div class="panel-body border-primary">
                                <p>
                                    <?php echo $ques->short_answer;?>
                                </p>
                               <?php $link = SITE_URL . "sub/" . $ques->subject_id . "/que/" . $ques->id;?>
                                <a class="read-more" href="<?php echo $link; ?>">Read more</a>

                            </div>
                    </div>
                    <?php endforeach; ?>
            </div>
            <?php else: ?>
                <h2>Sorry! No results found for <strong><?php echo $query?></strong></h2>
                <?php endif; ?>
    </div>


    <?php include '../_includes/footer.php'; ?>