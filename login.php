<?php
include '_core/init.php';

//insert data
if (isset($_POST['submit']))
{
try 
{ 
$emailid = $_POST['email'];
$pass = $_POST['password'];
 $query = $conn->prepare("SELECT * FROM login WHERE email='" . $emailid . "' AND pwd='".$pass."'");
 $query->execute();
  $count = $query->rowCount();
    
  if($count<=0)
     {
        echo '<script type="text/javascript">alert("EmailId or Password Incorrect");</script>';
     }
     else
     {
       $result = $query->fetch(); 
      if($result[5]!=1 || $result[6]!='')
      {
        echo "please verify email id";
      }
      else
      {        
              $dbusername=$result[1] ." ". $result[2];
              $dbemail=$result[3];
              $dbpassword=$result[4];
              session_start();
             $_SESSION['sess_user']=$emailid; 
             $_SESSION['name']=$dbusername; 
              if(isset($_SESSION["sess_user"]) && isset($_SESSION["name"])) {
                    header("Location: /sa/admin_panel/index.php");
           }
       
       }
     }
         
            
     
}

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->POSTMessage();
    }

$conn = null; 
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>eLearning - Free Educational Website</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
<style> .crumps
        {
            color:cornflowerblue;
        }</style>
</head>

<body>
    <!-- Fixed navbar -->
 <?php include '_includes/header.php'; ?>

    <!-- /.navbar -->
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </header>

<div class="container">
 <ol class = "breadcrumb">
    <li class="crumps"><a href="index.php">Home</a></li>
        <li class="active">Login</li>
    
    </ol></div>
    <section style="align:center;" id="services">
        <div class="container">

            <form class="form-signin" action="" method="post" autocomplete="off">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input style="width:50%;" type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input style="width:50%;" type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    <label>
                        <br>

                    </label>
                </div>
                <button class="btn btn-sm btn-primary" name="submit" type="submit">Sign in</button>

                <a href="sineup.php">
                    <input type="button" class="btn btn-sm btn-primary" value="Sign Up">
                </a>
                <br>
                <a href="forget_password.php" style="margin-left:16%;">Need Help?</a>
            </form>

        </div>
        <!-- /container -->

        <!--/.container-->
    </section>
     
         <?php include '_includes/footer.php'; ?>
    



    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
