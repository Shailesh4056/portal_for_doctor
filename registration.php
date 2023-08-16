<?php
error_reporting(0);
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'sem_5user');
if(isset($_POST['submit'])){
$gmail=$_POST['email'];
$mobile_no=$_POST['mobile_no'];

$q="select* from user_login where email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
	header('location:regrastratio.php? error=*sorry this data is alrady exits');
}
else
{
	$p="insert into log(email,mobile_no) values ('$username','$password','$mobile_no','$address','$gender')";
mysqli_query($con,$p);
}
}

?>