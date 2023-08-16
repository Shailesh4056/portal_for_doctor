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
<table class="table table-bordered table-striped bg-dark text-white">
<thead>
<th>id</th>
<th>username</th>
<th>password</th>
<th>mobile_no</th>
<th>address</th>
<th>gender</th>
<th>Delete</th>
<th>Update</th>
</thead>
<tbody>
<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'project1');
	   $gmail=$_POST['username'];
	   $password=$_POST['password'];
	   $mobile_no=$_POST['mobile_no'];
	   $address=$_POST['address'];
	   $gender=$_POST['gender'];

			  
$display="select* from log";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
  <tr>
			   <td><?php echo $sult ['id'];?></td>
			   <td><?php echo $sult ['username'];?></td>
			   <td><?php echo $sult ['password'];?></td>
			   <td><?php echo $sult ['mobile_no'];?></td>
			   <td><?php echo $sult ['address'];?></td>
			   <td><?php echo $sult ['gender'];?></td>
			      <td>
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