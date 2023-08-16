<?php
session_start();
$con=mysqli_connect('localhost','root','','sem_5user');
$email=$_POST['email'];
$res=mysqli_query($con,"SELECT * FROM `user_login` WHERE email='$email'");
$count=mysqli_num_rows($res);
while($sult=mysqli_fetch_array($res)){$data = $sult['id'];}
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($con,"update user_login set otp='$otp' where email='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	smtp_mailer($email,'OTP Verification',$html);
	$_SESSION['email']=$email;
	$_SESSION['User_Id']=$data;

	echo "yes";
}else{
	echo "not_exist";
}
function smtp_mailer($email,$subject, $msg){
	$to=$email;
	$subject="otp";
   	$body="$msg";
	$headers="From:healtcare.3153@gmail.com";
if (mail($to, $subject, $body, $headers)) {
    return 0;
} else {
    return 1;
}
}
?>