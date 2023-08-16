<?php
session_start();
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5user');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res="select * from user_login where email='$email' and otp='$otp'";
$ad=mysqli_query($con,$res);
$count=mysqli_num_rows($ad);
if($count>0){
	mysqli_query($con,"update user_login set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>