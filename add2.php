<?php
  $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'sem_5user');
if(isset($_POST['submit'])){
$id=$_GET['id'];
$image= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$a=mysqli_query($con,"UPDATE `user_login` SET image='$image' WHERE id='$id'");
	if($a){
     header("location:add.php");
	}
	else
	{
		echo"no";																																																																																																																																																																																																																												NB BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB`11	
}
}
	?>
}
}
	?>