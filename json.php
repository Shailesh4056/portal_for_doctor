<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'riseup');

$Qry="SELECT * FROM `user_account`";

$pp=mysqli_query($con,$Qry);

while($res=mysqli_fetch_array($pp))
{
	$data[]=$res;
	
}
print (json_encode($data));
?>