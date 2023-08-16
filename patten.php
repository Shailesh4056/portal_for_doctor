<?php

$num = 23456;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of 23456 is:.$revnum";  
?>
manishkurka2002@gmail.com
password: 9694403156
100.120.132.42:8080