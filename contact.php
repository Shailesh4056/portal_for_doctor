<?php
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5user');
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $massage=$_POST['massage'];
	 
	 $p="INSERT INTO `contact`(`name`, `email`, `massage`) VALUES ('$name', '$email', '$massage')";
	 $j=mysqli_query($con,$p);
 ?>