<?php

// get site direcory
$dir =substr(substr(dirname(__FILE__), strlen($_SERVER['DOCUMENT_ROOT'])),0,-strlen(basename(__DIR__)));
$dir= str_replace('\\', '/', $dir);
if($dir!="/" && $dir[0]!="/"){
    $dir='/'.$dir;
}
$dir= str_replace('//', '/', $dir);

defined("SITE_URL") || define("SITE_URL", "http://".$_SERVER['SERVER_NAME'].$dir);

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "mylogin");
define("SITE_TITLE", "E Learnin Portal");
define("SITE_DESC", "We are giving tutorials from beginners with detailed information");
define("QUES_LIMIT", 10);