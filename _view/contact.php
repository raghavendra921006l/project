<?php include '../_includes/head.php'; ?>
<?php include '../_includes/PHP_include.php'; ?>
<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
</header>

<!--crumps-->
<div class="container">
    <ol class="breadcrumb">
        <li class="crumps"><a href="home">Home</a></li>
        <li class="active">Contact</li>

    </ol>
</div>

<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="section-title">Your Message</h3>
            <br>

            <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
            <form action="" method="post" novalidate autocomplete="off">
                <div class="control-group">
                    <div class="controls">
                        <input type="text" class="form-control" placeholder="Full Name" id="name" name="fullname"
                               required data-validation-required-message="Please enter your name"/>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required
                               data-validation-required-message="Please enter your email"/>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject"
                               required data-validation-required-message="Please enter Subject"/>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control" placeholder="Message" name="message"
                                  id="message" required data-validation-required-message="Please enter your message"
                                  minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999"
                                  style="resize:none"></textarea>
                    </div>
                </div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary pull-right" style="background-color:#3d84e6;"
                        name="submit_contact_form">Send
                </button>
                <br/>
                <br/>
                <br/>
                <br/>
            </form>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title">Office Address</h3>
                    <div class="contact-info">
                        <h5>Address</h5>
                        <p>IInd floor Pacific Mall, New Delhi - India</p>

                        <h5>Email</h5>
                        <p>raghavendra921006l@gmail.com</p>

                        <h5>Phone</h5>
                        <p>+91 9717474448</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="section-title">Timings</h3>
                    <div class="contact-info">
                        <h5>Monday - Friday</h5>
                        <p>09:00 AM - 6:30 PM</p>

                        <h5>Saturday</h5>
                        <p>Closed</p>

                        <h5>Sunday</h5>
                        <p>Closed</p>
                    </div>
                </div>
            </div>
            <h3 class="section-title">Get connected</h3>
            <p>
                Thank you for your interest in E Learning Portal.
            </p><br>
            <?php if ($alert_id == 1) { ?>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class='<?php echo $alert_class; ?>'>
                            <strong><?php echo $alert_strong; ?> </strong><?php echo $alert_message; ?>
                        </div>
                    </div>
                </div>

                <?php }
                $alert_id = 0;
                $alert_message = "";
                $alert_class = "";
                $alert_strong = "";
             ?>
        </div>
    </div>
</div>


<!-- /container -->
<?php include '../_includes/footer.php'; ?>
