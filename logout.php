<?php
setcookie("username",$us,time()-(3600),"/");
header('location:user.php');
?>