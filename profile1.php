<?php
session_start();
?>
<html>
<body>
<form action="profile1.php" method="post">
<p>welcome <?php echo $_SESSION ['username']; ?></a></li></p>
<p>welcome <?php echo $_SESSION ['mobile_no']; ?></a></li></p>
</form>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'project1');

$username=$_POST['username'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$q="select* from log where username='".$_SESSION["mobile_no"]."';
$result=mysqli_query($con,$q);
$num=mysqli_fetch_assoc($result);

echo "mobile_no: ".$num["mobile_no"];
?>