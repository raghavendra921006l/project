 <?php
include '../_core/init.php'; 
//fetch data for delete question 
if(isset($_POST['get_option']))
 {   
$subject_name=$_POST['get_option'];
$data1 = new Database;
$query1="SELECT id,name,description FROM subject where name=:subject_name";
$sp =$data1->query($query1);  
$data1->bind(':subject_name',$subject_name);
$result1= $data1->resultset();
$count1= $data1->rowCount(); 
$i=0; 
while($i<$count1) 
{        
      echo $result1[$i]->id.",".$result1[$i]->name.",".$result1[$i]->description;
       $i++;
 }     
 exit;
}
?>
