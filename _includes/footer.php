  <?php
  $current_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  ?>
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5773d2a7d127a9164b1e6688/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <footer id="footer">
        <div class="container">
            <div class="social text-center">
                <a target="_blank" href="http://twitter.com/home?status=<?php echo $title; ?>+<?php echo $current_link;?>"><i class="fa fa-twitter"></i></a>
                <a  target="_blank" href="http://www.facebook.com/share.php?u=<?php echo $current_link;?>&title=<?php echo $title;?>"> <i class="fa fa-facebook"></i></a>
               <a target="_blank" href="https://plus.google.com/share?url=<?php echo $current_link;?>"><i class="fa fa-google-plus"></i></a>
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_link;?>"><i class="fa fa-linkedin"></i></a>
               
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel pull-left">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="<?php echo SITE_URL."home"; ?>">Home</a> |
                                <a href="<?php echo SITE_URL."contacts"; ?>">Contact</a> |
                                <a href="<?php echo SITE_URL."login"; ?>">Login</a> |
                                <a href="<?php echo SITE_URL."register"; ?>">Register</a>
                            </p>
							<!-- Styles -->	
												<style style="text/css">
												.example1 {
													height: 50px;	
													overflow: hidden;
													position: relative;
												}
														.example1 h1 {
															font-size: 1em;
															color: limegreen;
															position: absolute;
															width: 100%;
															height: 100%;
															margin: 0;
															line-height: 50px;
															text-align: center;
															/* Starting position */
															-moz-transform:translateX(100%);
															-webkit-transform:translateX(100%);	
															transform:translateX(100%);
															/* Apply animation to this element */	
															-moz-animation: example1 15s linear infinite;
															-webkit-animation: example1 15s linear infinite;
															animation: example1 15s linear infinite;
														}
														/* Move it (define the animation) */
														@-moz-keyframes example1 {
														0%   { -moz-transform: translateX(100%); }
														100% { -moz-transform: translateX(-100%); }
														}
														@-webkit-keyframes example1 {
														0%   { -webkit-transform: translateX(100%); }
														100% { -webkit-transform: translateX(-100%); }
														}
														@keyframes example1 {
														0%   { 
														-moz-transform: translateX(100%); 
														-webkit-transform: translateX(100%);
														transform: translateX(100%); 		
														}
														100% { 
														-moz-transform: translateX(-100%); 
														-webkit-transform: translateX(-100%);
														transform: translateX(-100%); 
														}
														}
														</style>

														<!-- HTML -->	
															<div class="example1"><h1><font color=white>
																Developed and Designed by : Raghavendra</font></h1>
															</div>
                        </div>
                    </div>
                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>

    <script src="<?php echo SITE_URL;?>assets/js/html5shiv.js"></script>
    <script src="<?php echo SITE_URL;?>assets/js/respond.min.js"></script>
    <script src="<?php echo SITE_URL;?>assets/js/modernizr-latest.js "></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js "></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js "></script>
    <script src="<?php echo SITE_URL;?>assets/js/jquery.cslider.js "></script>
    <script src="<?php echo SITE_URL;?>assets/js/custom.js "></script>
    <script src="<?php echo SITE_URL;?>contact/jqBootstrapValidation.js"></script>
    <script src="<?php echo SITE_URL;?>js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $('#mainCarousel').carousel({
            interval: 1000
        });
    </script>
    <script>
        $(function () {
            $("sineup_form").not("[type=submit]").jqBootstrapValidation();
        });
    </script>

    </body>

    </html>