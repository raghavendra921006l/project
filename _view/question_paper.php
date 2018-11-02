<?php include '../_includes/head.php'; ?>
         <style type="text/css">
            a,
            a:hover {
                text-decoration: none;
                color: inherit;
            }
            
            a:active {
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
                            <h1>Old Question Papers</h1>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <ol class="breadcrumb">
                    <li class="crumps"><a href="index.php">Home</a></li>
                    <li class="active">Question Papers</li>

                </ol>
            </div>
            <div id="courses">
                <section class="container">
                    <h2></h2>

                </section>
            </div>
            <div class="container">
                <div class="row">
                    <?php
     $i=0;

     while($i<$count)  
        {
            $link=SITE_URL."papers/".str_replace(' ','',$result[$i]->degree). str_replace(' ','',$result[$i]->subject) . str_replace(' ','',$result[$i]->year) .'.pdf';
              ?>
                        <div class="col-md-4">
                            <a href="<?php echo $link;?>">
                            <div class="alert alert-success">
                                <h4><?php echo $result[$i]->degree.' '.$result[$i]->subject.' '.$result[$i]->year; ?></h4>
                            </div>
                                </a>
                        </div>
                        <?php 
             $i++;
                 }
                  ?>
                </div>
            </div>
            <?php include '../_includes/footer.php'; ?>