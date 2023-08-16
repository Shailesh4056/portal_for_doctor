<?php
$mysqli = new mysqli('localhost', 'root', '', 'sem_5user');
if(isset($_GET['date'])){
    $date = $_GET['date'];
	  $stmt = $mysqli->prepare("select * from blod where date = ?");
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

if(isset($_POST['submit'])){
    $name = $_POST['name'];
	$dob= $_POST['dob'];
	$Email= $_POST['Email'];
	$phone= $_POST['phone'];
	$timeslot = $_POST['timeslot'];
	$gender= $_POST['gender'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$pincode= $_POST['pincode'];
	$state= $_POST['state'];
	$country= $_POST['country'];
    $BloodGroup = $_POST['BloodGroup'];	
	$Hospital = $_POST['Hospital'];
	$ltbd = $_POST['ltbd'];
	
		  $stmt = $mysqli->prepare("select * from blod where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
          $msg = "<div class='alert alert-danger'>sorry this slot is already booked </div>";
         }else{ 
		     
    $stmt = $mysqli->prepare("INSERT INTO `blod`(name, dob, Email, date, timeslot, phone, gender, address, city, pincode, state, country, BloodGroup, Hospital, ltbd) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssssssss',$name, $dob, $Email, $date, $timeslot, $phone, $gender, $address, $city, $pincode ,$state ,$country, $BloodGroup, $Hospital, $ltbd);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
	$bookings[] = $timeslot;
	if($msg)
	{
		
	$to=$Email;
	$sub="virtual Appointment Booking";
   	$body="$name: virtual Appointment Booking is booked Thank you";
$headers="From:healtcare.3153@gmail.com";
mail($to,$sub,$body,$headers);
	}
	else{
		echo "sorry! mail is not send ";
	}
    $stmt->close();
    $mysqli->close();
		         
		 }
    }

}
$duration = 40;
$cleanup = 0;
$start = "09:00";
$end = "16:00";
 
function timeslots($duration, $cleanup, $start, $end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();
    
    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }
        
        $slots[] = $intStart->format("H:iA")." - ". $endPeriod->format("H:iA");
        
    }
    
    return $slots;
} 
 
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
<style>
.f1{
	float: left;
}
.warpper{
	width: 100%;
	height: 100%;
	
	background-repeat: no-repeat;
	background-size: cover;
}
.main{
	background-image: url("blodbook.jpg");
	width: 30%;
	height: 1000px;
	background-color: rgba(7,47,79,0.63);
	margin: 50px 35%;
	borber-radius: 20px 20px 30px 30px;
	
}
.head{
	width: 100%;
	background-color: #f88800;
	height: 40px;
	border-radius: 20px 20px 0 0;
}
.head p{
	line-height:40px;
	text-align: center;
	font-size: 25px;
	font-weight: bold;
	color: #fff;
}
.form{
	width: 100%;
	height: -100px;
}
.name{
	font-size: 16px;
	color: #000;
	margin: 5px 0 0 5%;
}
.name-inp{
	width: 90%;
	height: 30px;
	margin: 5px 0 0 5%;
	font-size: 16px;
	padding: 2px;
	color: rgb(144,111,111);
	border: 1px solid rgb(17,67,107);
	background-color: rgb(231,232,250);
}
.name-inp:hover{
	
	background-color: rgb(0,23,41);
	color: rgb(173,167,167);
	border: 1px solid rgb(139,139,139);
	
}
.id{
	font-size: 16px;
	color: #fff;
	margin: 5px 0 0 5%;
}
.id-inp{
	font-size: 16px;
	margin: 5px 0 0 5%;
}
.date-inp{
	font-size: 16px;
	margin: 5px 0 0 5%;
}
.hos{
	font-size: 16px;
	margin: 5px 0 0 5%;
}
.group{
	font-size: 16px;
	margin: 5px 0 0 5%;
}
.state{
	font-size: 16px;
	margin: 5px 0 0 5%;
}
.gender{
	font-size: 16px;
	color: #000;
	margin: 5px 0 0 5%;
}
.gen{
	margin-left: 0%;
	color: #000;
	
}
.sub{
	width: 20%;
	margin: 5px 0 0 5%;
	font-size: 16px;
	height: 40px;
	background-color: #031c30;
	border: 1px solid rgb(17,67,107);
	color: #fff;
}
.sub:hover{
	background-color: #E94601;
	color: #fff;
}
</style>
 </head>

  <body>
    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
		  <div class="col-md-12">
       <?php echo(isset($msg))?$msg:""; ?>
   </div>
    <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
        foreach($timeslots as $ts){
    ?>
          <div class="col-md-2">
        <div class="form-group">
		   <?php if(in_array($ts, $bookings)){ ?>
       <button class="btn btn-danger"><?php echo $ts; ?></button>
       <?php }else{ ?>
           <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
          <?php } ?>

        </div>
    </div>
    <?php } ?>
           
        </div>
    </div>
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                           <form id="cov" action="" method="post" autocomplete="off" onsubmit="return myFunction()" >
                    <div class="form-group">
					
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
								<p class="name">FIRST NAME:</p>
				<p><input type="text" name="name" placeholder="Enter a Name" class="name-inp"></p>>
						
					
				<p class="name">DATE OF BIRTH:</p>
				<p><input type="date" name="dob" min="01-04-1998" max="01-04-2020" class="date-inp" ></p>
						
	
							<p class="name">EMAIL ID:</p>
							<p><input type="email" name="Email" placeholder="88888@gmail.com" class="name-inp"></p>
						
						
							<p class="name">MOBILE NUMBER:</p>
							<p><input type="text" name="phone" placeholder="10 digits number" class="name-inp"></p>
						
						
							<p class="gender">
							<span class="gen">GENDER:</span>
							<input type="radio" name="gender" class="male">MALE
								<input type="radio" name="gender" class="Female">Female
								<input type="radio" name="gender" class="Others">Others</p>
						
							<p class="name">ADDRESS:</p>
							<p><textarea cols="60" rows="10" class="name-inp" name="address"></textarea></p>
						
							<p class="name">CITY:</p>
							<p><input type="text" name="city" class="name-inp"></p>
						
							<p class="name">PIN CODE:</p>
							<p><input type="text" name="pincode" class="name-inp"></p>
						
							<p class="name">STATE:</p>
							<p class="state"><select name="state">
								<option>jharkhand</option>
								<option>Bihar</option>
								<option>Haryana</option>
								<option>Uttar Pradesh</option>
								<option>Gujarat</option>
							</select></p>
						
							<p class="name">COUNTRY</p>
							<p><input type="text" name="country" value="India" readonly="readonly" class="name-inp"></p>
						
					
							<p class="name">BLOOD GROUP:</p>
							<p class="group"><select name="BloodGroup">
								<option>O+</option>
								<option>O-</option>
								<option>A+</option>
								<option>A-</option>
								<option>B+</option>
								<option>B-</option>
								<option>AB+</option>
								<option>AB-</option>
							</select></p>
						
							<p class="name">HOSPITAL:</p>
							<p class="hos"><select name="Hospital">
								<option>Parul Sevashram</option>
								<option>Baroda Hospital</option>
								<option>Kalavati Hospital</option>
								<option>SSG Hospital</option>
								<option>Seven Hills Multispeciality Hospital </option>
							</select></p>
						
							<p class="name">LAST TIME BLOOD DONATE: </p>
							
							<p><input type="date" name="ltbd" class="name-inp"></p>

                    <button class="btn btn-primary" type="submit" name="submit" onsubmit="myFunction()">Submit</button>
				</form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
	function myFunction() {
var inpObj = document.getElementById("cont");
  var mai=document.getElementById("mail").value;
  var py=document.getElementById("type").value;
  var ge=document.getElementById("gen").value;
  if(ge == "Select"){
	document.getElementById("err6").innerHTML="*Please select a gender";
    return false;	
}		
  if (inpObj.value.length < 10 || inpObj.value.length > 10)
  { 
  document.getElementById("err").innerHTML = "*Enter a valid Contact no,Please enter 10 digit number";
  return false;
  }
  if(isNaN(inpObj.value))
  {
	  document.getElementById("err").innerHTML = "*Please enter 10 digit number not character";
  return false;
  }
  if(mai.indexOf('@') <= 0)
  {
	   document.getElementById("err1").innerHTML = "*Enter a valid mail";
	   return false;
  }
  if((mai.charAt(mai.length-4)!='.') && (mai.charAt(mai.length-3)!='.'))
  {
	  document.getElementById("err1").innerHTML = "*Enter a valid mail";
      return false;
  }
if(py == "Select")
{
	document.getElementById("err2").innerHTML = "*Please select a Appointment Type";
      return false;
}
if(py == "Virtual"){
	document.getElementById("cov").action="TxnTest.php";	
}		
}

    </script>	
	<script>
	$(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
	</script>
 </body>
</html>