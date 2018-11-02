<?php

if(isset($_POST['submit']))
{
$name = $_POST['fullname'];
$email_address = $_POST['email'];
$message = $_POST['message'];
 $subject = $_POST['subject'];
   echo $name;
}
?>