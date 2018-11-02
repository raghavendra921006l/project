<?php include '../_includes/head.php'; ?>
<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Tech Zone</h1>
            </div>
        </div>
    </div>
</header>
<style>
  .video-body{
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      padding-top: 25px;
      height: 0;
  }
  .video-body iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
  }
</style>
<div class="container">
    <ol class="breadcrumb">
        <li class="crumps"><a href="home">Home</a></li>
        <li class="active">Tech Zone</li>

    </ol>
</div>
<br>
<br>
<div id="courses">
    <div class="container">
        <div class="row">
            <?php
            $i = 0;
            while ($i < $count) {
                ?>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="white-text"><?php echo $result[$i]->title; ?> </h4>
                        </div>
                        <div class="panel-body video-body border-primary">
                            <?php echo $result[$i]->video_url; ?>
                        </div>
                    </div>
                </div>
                <?php $i++;
            }?>
        </div>
    </div>
</div><br>
<!-- container -->
<?php include '../_includes/footer.php'; ?>