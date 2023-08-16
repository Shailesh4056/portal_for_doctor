<?php
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'accounts');   
 if(isset($_POST['search']))
 {
	 $name=$_POST['name'];
			  
$display= "SELECT `id`, `name` FROM `view` WHERE name='$name'";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
			   <?php echo $sult ['name'];?>
			   
			   <?php
}
 }
 ?>
