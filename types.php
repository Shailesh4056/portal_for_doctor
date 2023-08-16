<?php	
session_start();
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="table-responsive">
<h1 class="text-center">pasent detilies hare</h1>
<tbody>
<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'accounts');
	   
	   $password=$_POST['name'];
	   $mobile_no=$_POST['disc'];
	   $address=$_POST['price'];
	   $gmail=$_POST['image'];

			  
$display="select* from view";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
                   <?php echo $sult ['image'];?>
			       <?php echo $sult ['name'];?>
				   <?php echo $sult ['price'];?>
				   <?php echo $sult ['disc']?>
			      
				   
				  <button class="btn-danger btn"><a href="Delete.php?id=<?php echo $sult ['id'];?>" class="text-white">Delete
				     </a></button></td>
			    <td>
				  <button class="btn-success btn"><a href="Update.php?id=<?php echo $sult ['id'];?>" class="text-white">Update
				     </a></button></td>
			  
			   </tr>
			   <?php
}
?>
</tbody>
</div>
<table>
</body>