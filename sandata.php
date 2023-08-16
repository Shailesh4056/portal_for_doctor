<?php
 require('TxnTest.php');
 $id=$_GET['id'];
 echo $id;
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'accounts');
if(isset($_POST['Book']))
{
$name=$_POST['name'];
	   $date=$_post['date'];
	   $slotsani=$_POST['slotsani'];
	   $lol=$_POST['lol'];
	   $slot=$_POST['slot'];
	   $Mobile_no=$_POST['Mobile_no'];
	   $mail=$_POST['mail'];
	   $city=$_POST['city'];   
	   $pin=$_POST['pin'];
	   $address=$_POST['address'];
      $cov=$_POST['cov'];

	  $q="INSERT INTO `sanatizer`(`name`, `date`, `slotsani`, `lol`, `slot`, `Mobile_no`, `mail`, `city`, `pin`, `address`, `cov`) VALUES ('$name', '$date', '$slotsani', '$lol', '$slot', '$Mobile_no', '$mail', '$city', '$pin', '$address', '$cov')";
      $result=mysqli_query($con,$q);
}
?>