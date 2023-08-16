<?php
if(!isset($_COOKIE["username"])){
	header("location:int3.php");
} 
?>
<html>
<head>
<link rel="stylesheet" href="styl3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="manu-bar">
<ul>
<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Booking</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">About us</a>
<div class="sub-manu-1">
<ul>
<li><a href ="">mission<i class="fa fa-angle-right"></i></a></li>
<li><a href ="">vision<i class="fa fa-angle-right"></i></a></li>
<li><a href ="">team<i class="fa fa-angle-right"></i></a></li>
</ul>
</div>
</li>
<li><a href="login1.php"><i class="fa fa-sign-in">login</i></a></li>
</ul>
</div>
<div class="container">
<h2 class="text-center text-success">welcome <?php echo $_SESSION ['gmail']; ?></h2>
</div>
</body>
</html>