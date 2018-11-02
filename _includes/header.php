<?php
$url = $_SERVER['REQUEST_URI'];
$tokens = explode('/', $url);
$is_active = $tokens[sizeof($tokens)-1];
$logo=SITE_URL."assets/images/logo.png";
?>
 <style>
        button {
            border: none;
            padding-left: 0px;
            background: none;
        }
        #list:hover{
            background-color: #3d84e6;
        }
        .navbar-inverse .navbar-nav > .active > a{
            background-color: #3d84e6;
            color:white;
        }
       .navbar-inverse .navbar-nav > .active > a:hover,.navbar-inverse .navbar-nav>li> a:hover{
       color: #fff !important;
     }
    </style>
        <div class="header navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href='<?php echo SITE_URL; ?>'>

                        <img src="<?php echo $logo;?>" alt="Techro HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right mainNav">
                        <li id="list" class="<?php echo ($is_active == 'home' || $is_active == '') ? 'active' :'' ?>"><a href="<?php echo SITE_URL;?>" >Home</a></li>
                        <li id="list" class="<?php echo ($is_active == 'question_paper') ? 'active' :'' ?>"><a href="<?php echo SITE_URL."question_paper";?>">Question Papers</a></li>

<li id="list" class="<?php echo ($is_active == 'tech') ? 'active' :'' ?>"><a href="<?php echo SITE_URL."tech";?>">Tech Zone</a></li>

                        <li id="list" class="<?php echo ($is_active == 'frequently_asked_que') ? 'active' : '' ?>"><a href="<?php echo SITE_URL."frequently_asked_que";?>">FAQ</a></li>

                        <li id="list" class="<?php echo ($is_active == 'contacts') ? 'active' : '' ?>"><a href="<?php echo SITE_URL."contacts";?>">Contact</a></li>
                        <li>
                            <a>
                                <input name="q" type="text" placeholder="Search" value="" tabindex="1" autocomplete="off" maxlength="240" style="width: 188px; max-width: 188px;">
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>