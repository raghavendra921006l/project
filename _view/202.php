<?php include '../_includes/PHP_include.php'; ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    </head>

    <body style="background-color:#e6e6e6">
        <!--login modal-->

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" style="width:350px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <h1 class="text-center">E Learning Portal</h1>
                                <h4 class="text-center">Admin Login</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form col-md-12 center-block" method="post" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="Email" name="admin_email" id="admin_email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control input-lg" placeholder="Password" name="admin_password" id="admin_password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-md" name="btn_login_admin" id="btn_submit">Sign In</button>

                                    </div>
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
															<div class="example1"><h1><font color=Blue>
																Developed and Designed by : Raghavendra</font></h1>
															</div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    </html>