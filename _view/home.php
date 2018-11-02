<?php include '../_includes/head.php'; ?>
<?php include '../_includes/PHP_include.php'; ?>
<style type="text/css">
    a,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }

    .carousel-control .fa {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
    }
</style>

<!-- Fixed navbar -->

<!-- /.navbar -->

<!-- Header -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img src="<?php echo SITE_URL . "assets/images/slides/img1.jpg " ?>" alt="Chania" width="460" height="345">

        </div>

        <div class="item">
            <img src="<?php echo SITE_URL . "assets/images/slides/img2.jpg " ?>" alt="Chania" width="460" height="345">

        </div>

        <div class="item">
            <img src="<?php echo SITE_URL . "assets/images/slides/img3.jpg " ?>" alt="Flower" width="460" height="345">

        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /Header -->
<div id="courses">
    <div class="container">
        <h2 class="heading">Online Subjects</h2>
        <div class="row">
            <div class="col-md-10">
                <?php
                $i = 0;

                while ($i < $count && $i <= 4) {

                    $link = SITE_URL . "sub/" . $result[$i]->id;

                    ?>
                    <div class="col-md-4 col-sm-6">
                        <a href="<?php echo $link; ?>" title="Licensing Services">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="white-text"> <?php echo $result[$i]->name; ?> <i
                                            class="fa fa-fw fa-money panel-icon"></i></h4>
                                </div>
                                <div class="panel-body border-primary">
                                    <p class="line-clamp line-clamp-3"><?php echo $result[$i]->description; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    $i++;
                }
                ?>

                <div class="col-md-4 col-sm-6">
                    <a href=<?php echo SITE_URL."allsubjects"; ?>>
                        <div class="panel panel-secondary">
                            <div class="panel-heading">
                                <h4 class="white-text"> More Subjects <i
                                        class="fa fa-fw fa-money panel-icon"></i></h4>
                            </div>
                            <div class="panel-body border-secondary">
                                <p class="line-clamp line-clamp-3">We have a lot more subjects to offer please check
                                    here.</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-2 col-sm-12 hidden-sm hidden-xs" style="padding:0px;margin:0px;padding-top:20px;">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="white-text">Login <i class="fa fa-fw fa-user panel-icon"></i></h4>
                    </div>
                    <div class="panel-body border-success">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            </div> 
                            <button type="submit" name="submit_login" class="btn btn-block btn-success">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- container -->
<?php include '../_includes/footer.php'; ?>