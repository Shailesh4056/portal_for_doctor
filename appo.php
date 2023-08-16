<?php
$con = mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5admin');

if(isset($_POST['submit'])){
	$age=$_POST['age'];
	$dose=$_POST['dose'];
	$doseqwt=$_POST['doseqwt'];
	$date=$_POST['date'];
	$pincode=$_POST['pin'];
	$Address=$_POST['Address'];
	
  $p="SELECT * FROM `18+dos2` WHERE date='$date' & address='$Address' & pin='$pincode'";
  $result=mysqli_query($con,$p);
   $num=mysqli_num_rows($result);
if($num>0)
{
	header('location:covin.php? error=*sorry this data is alrady exits');
}
else
{
	$n="INSERT INTO `18+dos2`(`age`, `dose2`, `qwt`, `date`, `pin`, `address`) VALUES ('$age','$dose','$doseqwt','$date','$pincode','$Address')";
	$j=mysqli_query($con,$n);
     header('location:covin.php');
	
}
}
?>