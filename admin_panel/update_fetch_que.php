 <?php
include '../_core/init.php'; 
//fetch data for delete question
if(isset($_POST['get_option']))
 {   
$subject_id=$_POST['get_option'];
	$data1 = new Database;
	$query1="SELECT * FROM questions where subject_id=:subject_id";
	$sp =$data1->query($query1);  
	$data1->bind(':subject_id',$subject_id);
	$result1= $data1->resultset();
	$count1= $data1->rowCount(); 
	$i=0; 
	while($i<$count1) 
	{    
	 echo "<option value=".str_replace(' ', '', $result1[$i]->id).">".$result1[$i]->question."</option>";
	      
	       $i++;
	 }     
 exit;
}
?>
