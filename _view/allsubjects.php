<?php include '../_includes/head.php'; ?>
<style type="text/css">
    a,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    .crumps {
        color: cornflowerblue;
    }
</style>
<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Online Subjects</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <ol class="breadcrumb">
        <li class="crumps"><a href="home">Home</a></li>
        <li class="active">Subjects</li>

    </ol>
</div>
<br>
<br>
<div id="courses">
    <div class="container well">
        <div class="row">
            <?php
            $i = 0;
            while ($i < $count) {
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

        </div>
    </div>
</div>
<!-- container -->
<?php include '../_includes/footer.php'; ?>
