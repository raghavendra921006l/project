 <?php
include '../_core/init.php'; 
//fetch data for delete question 
if(isset($_POST['get_option']))
 {   
$video=$_POST['get_option'];
$data1 = new Database;
$query1="SELECT id,title,video_url FROM technical_zone where title=:title";
$sp =$data1->query($query1);  
$data1->bind(':title',$video);
$result1= $data1->resultset();
$count1= $data1->rowCount(); 
$i=0; 
while($i<$count1) 
{        
      echo $result1[$i]->id.",".$result1[$i]->title.",".$result1[$i]->video_url;
       $i++;
 }     
 exit;
}
?>
