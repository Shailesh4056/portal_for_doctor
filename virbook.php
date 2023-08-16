<?php
session_start();
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
$duration = 25;
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
                    <h4 class="modal-title">Booking for:<span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                           <form id="cov" action="TxnTest.php" method="post" autocomplete="off" onsubmit="return myFunction()" >
                    <div class="form-group">
					 <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                </div>
<p>Hospital</p>
<input type="text" name="host" id="host" value="Medistar Hospital" readonly="readonly">
<p>Doctor</p>
<input type="text" name="doc" id="doc" value="Dr shailesh sharma MBBS,MD Orthopaedics" readonly="readonly">
<input type="text" name="User_Id" value="<?php echo $_SESSION['User_Id']; ?>" style="display:none;">
<p>Name</p>
<input type="text" id="fname" name="fname" placeholder="First Name" required>
<input type="text" id="lname" name="lname" placeholder="Last Name" required>
<p>Gender</p>
<select name="gen" id="gen" required>
<option value="Select">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<p id="err6" style="color:Red;"></p>
<h3></h3>
<p>Date</p>
<input type="date" id="date" name="date" placeholder="Enter appointment date" required>
<p id="err5" style="color:Red;"></p>
<p>Contact no</p>
<input type="text" name="cont" id="cont" placeholder="Enter a contact no" required>
<p id="err" style="color:Red;"></p>
<p>E-mail</p>
<input type="mail" name="mail" id="mail" placeholder="Enter your mail" required>
 <p id="err1" style="color:Red;"></p>
 <p>Appointment Type</p>
<select name="type" id="type" required>
<option value="Select">Select</option>
<option value="Physical">Physical</option>
<option value="Virtual">Virtual</option>
</select>
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