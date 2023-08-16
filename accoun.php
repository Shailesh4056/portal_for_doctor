<?php 
    $startdate = "02-07-2021";
$expire = strtotime($startdate. ' + 2 days');
$today = strtotime("today midnight");

if($today >= $expire){
    echo "expired";
} else {
    echo "active";
}
?>