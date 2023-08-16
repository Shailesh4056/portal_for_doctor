<?php
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'sem_5admin');
if(isset($_POST['submit'])){
$na=$_POST['Name'];
$em=$_POST['email'];
$ph=$_POST['Phone'];	
$pr=$_POST['Website'];	
$ty=$_POST['Priority'];	
$ms=$_POST['Type'];	
$ds=$_POST['Message'];	

$p="INSERT INTO `mock`(`Name`, `Email`, `Phone`, `Website`, `Priority`, `Type`, `Message`) VALUES('$na','$em','$ph','$pr','$ty','$ms','$ds')";
mysqli_query($con,$p);
}
?>