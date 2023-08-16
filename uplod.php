<?php
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'accounts');
	$gmail=$_POST['gmail'];
     $password=$_POST['password'];
     $mobile_no=$_POST['mobile_no'];
     $address=$_POST['address'];
	 $gender=$_POST['gender'];
     $image=$_FILES['image'];
	 $str_password=password_hash($password,PASSWORD_BCRYPT);
	 
		$display="select* from profil where gmail='$gmail' && password='$str_password' && mobile_no='$mobile_no' && address='$address' && gender='$gender' && image='$image'";
		$result=mysqli_query($con,$display);		
	    $num=mysqli_num_rows($result);		
		if($num == 1)
		{
			echo "select another image";
			echo ".<br>";
		}
		else
		{
			 $q="INSERT INTO profil(`gmail`, `password`, `mobile_no`, `address`, `gender`, `image`) VALUES ('$gmail','$password','$mobile_no','$address','$gender','$destinationfile')";		
		mysqli_query($con,$q );
		}
		}
?>