<?php
session_start();
session_destroy();
if($_SESSION['sess_user']=='sundershyam51@gmail.com')
{
    
unset($_SESSION['sess_user']);
    header("Location: ../202");
}
else
{
    
unset($_SESSION['sess_user']);
header("Location: ../login");
    }
?>
