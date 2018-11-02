<?php include '../_includes/head.php'; ?>
<!-- /.navbar -->
<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Frequently asked questions</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <ol class="breadcrumb">
        <li class="crumps"><a href="home">Home</a></li>
        <li class="active">Frequently asked questions</li>

    </ol>
</div>
<br>
<br>
<div class="container">

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#interesting">Interesting</a></li>
        <li><a data-toggle="tab" href="#feature">Featured</a></li>
        <li><a data-toggle="tab" href="#week">Week</a></li>
        <li><a data-toggle="tab" href="#month">Month</a></li>
    </ul>
    <div class="tab-content">
        <div id="interesting" class="tab-pane fade in active">
            <h2>Thanks for Patience! We are analysing popular questions.</h2>
        </div>
        <div id="feature" class="tab-pane fade">
            <?php if (isset($featured) && !empty($featured)): ?>
                <h2>Featured questions <small>Cherry picked by our team</small></h2>
                <ul class="media-list">
                    <?php foreach ($featured as $ques): ?>
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $ques->question; ?></h4>
                                <p><?php echo $ques->short_answer; ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <h2>Thanks for Patience! We are still working to pick some questions.</h2>
            <?php endif; ?>
        </div>
        <div id="week" class="tab-pane fade">
            <h2>Thanks for Patience! We are analysing popular questions for this week.</h2>
        </div>
        <div id="month" class="tab-pane fade">
            <h2>Thanks for Patience! We are analysing popular questions for this month.</h2>
        </div>
    </div>
</div>


<?php include '../_includes/footer.php'; ?>