<?php
session_start();
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5user');
if(isset($_POST['submit'])){
$age=$_POST['age'];
$da=$_POST['date'];
$do=$_POST['dose'];
$pin=$_POST['pin'];	
$loc=$_POST['location'];	
$fna=$_POST['name'];
$adhar=$_POST['adhar'];
$dob=$_POST['dob'];
$ge=$_POST['gen'];
$Contact=$_POST['Contact'];
$ma=$_POST['mail'];
$ty=$_POST['slot'];
$code=rand(11111,99999);
$status=$_POST['status'];
$User_Id=$_SESSION['User_Id'];

  $p="SELECT * FROM `18+dos2` WHERE adhar='$adhar'";
  $result=mysqli_query($con,$p);
   $num=mysqli_num_rows($result);
if($num>0)
{
	header('location:bookcovin.php? error=*sorry this data is alrady exits');
}
else{
$qt="INSERT INTO `18+dos2`(`age`, `date`, `dose`, `pincode`, `address`, `name`, `adhar`, `dob`, `Gender`, `Contact`, `E-mail`, `slot`, `code`, `status`, `User_Id`) VALUES('$age','$da','$do','$pin','$loc','$fna', '$adhar','$dob','$ge','$Contact','$ma','$ty' ,'$code', '$status', '$User_Id')";
$q=mysqli_query($con,$qt); 
if($q){
	$pin=$_POST['pin'];	
	echo $pin;
	$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5admin');
 $date=date('y-m-d');
	 $i="SELECT * FROM `covinadd` WHERE pin= $pin and date >='$date'";
  $result=mysqli_query($con,$i);
  while($rows=mysqli_fetch_array($result))
  { 
     $dose= $rows['qwt'];
	 $k=$dose-'1';
	 //echo $qwt;
	 $j = mysqli_query($con,"UPDATE `covinadd` SET qwt='$k' where pin='$pin' and date >='$date'");
	if($j)
	{
		echo "ok";
		echo $k;
	}
	else{
		echo "not ok";
	}
  }
	$to=$ma;
	$sub="Covid-19 Vaccine Booking";
   	$body="date:-$da, dose:-$do. slot:-$ty: your Covid-19  Vaccine booking has been successfully Booked. Your center is $pin-$loc.  With warm regard.";
$headers="From:healtcare.3153@gmail.com";
mail($to,$sub,$body,$headers);
include('covbill.php');
}
}		
}
?>