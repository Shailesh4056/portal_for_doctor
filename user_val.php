<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'sem_5user');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$address=$_POST['address'];
$q="select* from user_login where email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
	header('location:user_reg.php? error=*sorry this data is alrady exits');
}
else
{
	
$p="INSERT INTO `user_login`(`name`, `mobile_no`, `email`, `address`) VALUES ('$name', '$mobile_no', '$email', '$address')";
mysqli_query($con,$p);
header('location:login.php');
}
}

?>