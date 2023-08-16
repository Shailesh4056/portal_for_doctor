<?php
 $con=mysqli_connect('localhost','root')
 mysqli_select_db($con,'project1');
$id=$_GET['id']

$p="DELETE FROM `log` WHERE id= $id"
$q="mysqli_query($con,'$p')";
?>