<?php
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5user');
if(isset($_COOKIE["type"])){
$ho=$_COOKIE["host"];
$do=$_COOKIE["doc"];	
$fna=$_COOKIE["fname"];
$lna=$_COOKIE["lname"];
$ge=$_COOKIE["gen"];
$da=$_COOKIE["date"];
$co=$_COOKIE["cont"];
$ma=$_COOKIE["mail"];
$ty=$_COOKIE["type"];
$ord=$_COOKIE["ORDER_ID"];
$cui=$_COOKIE["CUST_ID"];
$amu=$_COOKIE["TXN_AMOUNT"];
$qu="INSERT INTO `appointment`(`Hospital`,`Doctor`,`fname`, `lname`, `Gender`,`Date`,`Contact_no`,`email`,`Type`) VALUES ('$ho','$do','$fna','$lna','$ge','$da','$co','$ma','$ty')";
$do=mysqli_query($con,$qu);
	if($do)
	{
		
	$to=$ma;
	$sub="physical Appointment Booking";
   	$body=",your physical Appointment Booking in Hospital. Thank you";
$headers="From:healtcare.3153@gmail.com";
mail($to,$sub,$body,$headers);
include('succ.php');
	}

else{
	include('fai.php');
}
 
 setcookie("fname",$fna,time()-(3600),"/");
    setcookie("lname",$lna,time()-(3600),"/");
    setcookie("date",$da,time()-(3600),"/");
	setcookie("cont",$co,time()-(3600),"/");
    setcookie("doc",$do,time()-(3600),"/");
	setcookie("type",$ty,time()-(3600),"/");
	setcookie("mail",$ma,time()-(3600),"/");
	setcookie("gen",$ge,time()-(3600),"/");
	setcookie("host",$ho,time()-(3600),"/");
    setcookie("ORDER_ID",$ord,time()-(3600),"/");
    setcookie("CUST_ID",$cui,time()-(3600),"/");
    setcookie("TXN_AMOUNT",$amu,time()-(3600),"/");
}
?>