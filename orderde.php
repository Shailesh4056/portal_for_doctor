<?php
 $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'accounts');
$q="SELECT `id` `name` `address` `mbile_no` FROM `sanatizer` ORDER BY id, name, addrses, ";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
echo "<h1>" .$num. "</h1>";
?>