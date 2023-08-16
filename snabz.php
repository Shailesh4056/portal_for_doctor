<?php
 $mysqli = new mysqli('localhost', 'root', '', 'sem_5user');
if(isset($_GET['date'])){
    $date = $_GET['date'];
	  $stmt = $mysqli->prepare("select * from appointment where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            $stmt->close();
        }
    }
}
if(isset($_COOKIE["type"])){
$ho=$_COOKIE["host"];
$do=$_COOKIE["doc"];	
$fna=$_COOKIE["fname"];
$lna=$_COOKIE["lname"];
$ge=$_COOKIE["gen"];
$da=$_COOKIE["date"];
$timeslot=$_COOKIE["timeslot"];
$co=$_COOKIE["cont"];
$ma=$_COOKIE["mail"];
$ty=$_COOKIE["type"];
$cui=$_COOKIE["CUST_ID"];
$v=$_COOKIE["TXN_AMOUNT"];
$ord=$_COOKIE["ORDER_ID"];
$User_Id=$_COOKIE["User_Id"];


		 $stmt = $mysqli->prepare("SELECT * FROM appointment WHERE date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
          $msg = "<div class='alert alert-danger'>sorry this slot is already booked </div>";
         }else
		 { 		     
    $stmt = $mysqli->prepare("INSERT INTO appointment(host, doc, fname, lname, gen, date, timeslot, cont, mail, type, CUST_ID, TXN_AMOUNT, ORDER_ID, User_Id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssssssssss', $ho, $do, $fna, $lna, $ge, $da, $timeslot, $co, $ma, $ty, $cui, $v, $ord, $User_Id);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
	$bookings[] = $timeslot;
	if($msg)
	{
	$to=$ma;
	$sub="Virtual Appointment Booking : ";
   	$body="Dear $fna $lna, Your Appointment with $do is Booked successfully . Thank you";
    $headers="From:healtcare.3153@gmail.com";
mail($to,$sub,$body,$headers);
include('succ.php');
	}

else{
	include('fai.php');
}
  $stmt->close();
    $mysqli->close();
		 }
	}
 setcookie("fname",$fna,time()-(3600),"/");
    setcookie("lname",$lna,time()-(3600),"/");
    setcookie("date",$da,time()-(3600),"/");
	setcookie("timeslot",$timeslot,time()-(3600),"/");
	setcookie("cont",$co,time()-(3600),"/");
    setcookie("doc",$do,time()-(3600),"/");
	setcookie("type",$ty,time()-(3600),"/");
	setcookie("mail",$ma,time()-(3600),"/");
	setcookie("gen",$ge,time()-(3600),"/");
	setcookie("host",$ho,time()-(3600),"/");
	setcookie("CUST_ID",$cui,time()-(3600),"/");
	setcookie("TXN_AMOUNT",$v,time()-(3600),"/");
    setcookie("ORDER_ID",$ord,time()-(3600),"/");
    setcookie("User_Id",$User_Id,time()-(3600),"/");
}
?>