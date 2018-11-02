 <?php
include '../_core/init.php'; 
//fetch data for delete question 
if(isset($_POST['get_que']))
 {   
$id=$_POST['get_que'];
$data1 = new Database;
$query1="SELECT * FROM questions where id=:id";
$sp =$data1->query($query1);  
$data1->bind(':id',$id);
$result1= $data1->resultset();
$count1= $data1->rowCount(); 
$i=0; 
while($i<$count1) 
{    
 echo $result1[$i]->id."@" . $result1[$i]->question."@".$result1[$i]->short_answer."@".$result1[$i]->long_answer;      
  $i++;
 }     
 exit;
}
?>
