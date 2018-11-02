<?php
include '../_core/init.php';
$title="E Learning Portal | Home Page";
$descrition="Void Learn is a e-Learning Website";
$data = new Database;
$emailid=$_GET['email'];
$confirmationcode=$_GET['code'];
//select all details from db where this email belongs
try
{
 
  $query ="SELECT * FROM login WHERE email=:emailid AND confirmation_code=:confirmationcode";
  $data->query($query);  
  $data->bind(':emailid',$emailid);
  $data->bind(':confirmationcode',$confirmationcode);
  $data->execute(); 
  $count= $data->rowCount();  
  $result= $data->resultset();  
    
if($count>0)
  {
     if($result[0]->status==1)
     {
      echo "email already activated";
     }
     else
       {
      $query="UPDATE login SET status='1' WHERE (email=:emailid AND confirmation_code=:confirmationcode)";
      $data->query($query);  
      $data->bind(':emailid',$emailid);
      $data->bind(':confirmationcode',$confirmationcode);
      if($data->execute()); 
      echo 'Account activated successfully';
       }
     }
   }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    } 
    ?>