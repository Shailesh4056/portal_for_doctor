<?php
$conn=mysqli_connect('localhost','root');
$db=mysqli_select_db($conn,'sem_5user');
$firstname=$_POST['FirstName'];
$lastname=$_POST['LastName'];
$dob=$_POST['dob'];
$emailid=$_POST['EmailID'];
$mobilenumber=$_POST['MOBILENUMBER'];
$gender=$_POST['gender'];
$ADDRESS=$_POST['ADDRESS'];
$city=$_POST['City'];
$pincode=$_POST['Pincode'];
$state=$_POST['State'];
$country=$_POST['Country'];

$p="INSERT INTO `organ`(`FirstName`, `lastName`, `dob`, `EmailID`, `MOBILENUMBER`, `gender`, `Address`, `City`, `Pincode`, `State`, `Country`) VALUES('$firstname','$lastname','$dob','$emailid','$mobilenumber','$gender','$ADDRESS','$city','$pincode','$state','$country')";
$a=mysqli_query($conn,$p);
if($a){
	header('location:organ donation1.php');
}else{
	echo"not ok";
}
?>