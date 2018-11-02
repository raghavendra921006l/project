<?php
//gives 
function baseurl()
{
    $baseurl = "http://" . $_SERVER['SERVER_NAME'];
    return $baseurl;
}

function requesturl()
{
    $requesturl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    return $requesturl;
}

function getActive()
{
    $url = $_SERVER['REQUEST_URI'];
    $tokens = explode('/', $url);
    return $tokens[sizeof($tokens) - 1];
}

?>