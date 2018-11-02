<?php
$status=$_SERVER['REDIRECT_STATUS'];
$codes=array(
    200 => array('Unknown Error/Wrong Redirect', 'You seem to be at wrong place. Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    401 => array('401 Login Error', 'It appears that the password and/or user-name you entered was incorrect.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    403 => array('403 Forbidden', 'Sorry, employees and staff only.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    404 => array('404 Missing', 'We\'re sorry, but the page you\'re looking for is missing, hiding, or maybe it moved somewhere else and forgot to tell you.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
    504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.Please start from <a class="underline" href="'.SITE_URL.'">here</a>.'),
);

$errortitle=$codes[$status][0];
$message=$codes[$status][1];

if($errortitle==false){
    $errortitle="Unknown Error";
    $message="An unknown error has occurred.";
}

?>
<?php
$page_desc="Oops! Something went wrong";
$page_title=$errortitle;
$page_keyword="Error ".$errortitle;
$page_url="";
$page_active='Error';
$title=$page_title;
$invalidLink= true;
$color='red';
include "../_includes/head.php";?>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Error</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <ol class="breadcrumb">
            <li class="crumps"><a href="home">Home</a></li>
            <li class="active">Error</li>

        </ol>
    </div>
    <div class="container">
    <div class="well border-red"><!-- Insert headers here. -->
        <?php
        echo('<h1>'.$errortitle.'</h1>');
        echo('<p>'.$message.'</p>');
        ?>
    </div>
    </div>
    <!--[if lt IE 9]>
    <div class="well">
        <h2>I'm hurt, Shyam!</h2>
        <p>Either this browser is outdated or it is incompatible.Please consider updating the browser or switch to another</p>
    </div>
    <![endif]-->
<?php require_once("../_includes/footer.php");?>