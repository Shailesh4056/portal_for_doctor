<doctype html>
<html>
<head>
<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1 class="text-center text-white background-black">registred with name and profile</h1>
<?php
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'profile');
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	if(empty($username))
	{
		echo "plese enter a username";
	}
	$email=$_POST['email'];
     $password=$_POST['password'];
     $mobile_no=$_POST['mobile_no'];
     $address=$_POST['address'];
     $image=$_FILES['image'];
	 $str_password=password_hash($password,PASSWORD_BCRYPT);
	print_r($username);
	echo"<br>";
	//print_r($file);
	$filename=$image['name'];
	$fileerroe=$image['error'];
	$filetmp=$image['tmp_name'];
	
	$fileext=explode('.',$filename);
	$filecheck=strtolower(end($fileext));
	
	$fileextstored=array('jpg','png','jpeg');
	
	
	if(in_array($filecheck,$fileextstored)){
		
		$destinationfile='display/'.$filename;
		move_uploaded_file($filetmp,$destinationfile);
		//$q="INSERT INTO `uplode`( `username`, `image`) VALUES ('$username','$destinationfile')";
		
		//$query=mysqli_query($con,$q );
		$display="select* from printf where email='$email' && password='$str_password' && mobile_no='$mobile_no' && address='$address' && image='$destinationfile'";
		$result=mysqli_query($con,$display);
		
	    $num=mysqli_num_rows($result);
		
		if($num == 1)
		{
			echo "select another image";
			echo ".<br>";
		}
		else
		{
			 $q="insert into `printf`(`username`, `email`, `password`, `mobile_no`, `address`, `image`) VALUES ('$username','$email','$password','$mobile_no','$address','$destinationfile')";		
		mysqli_query($con,$q );
		}
		while($sult=mysqli_fetch_array($result)){
?>
<?php echo $sult['id']; ?>
<?php echo $sult['username']; ?>
<?php echo $sult['email'];?>
<?php echo $sult['mobile_no'];?>
<?php echo $sult['address'];?>
<img src="<?php echo $sult['image']; ?> " height="100px" width="100px">
<?php
}
}
}
?>
</div>
</body>
</html>