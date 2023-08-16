<?php
$id=$_GET['id'];
 echo $id;
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'sem_5admin');
$display= "SELECT * FROM `hospitals` WHERE id='$id'";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
<div class="logb3">
<form id="cov" action="TxnTest.php" method="POST" onsubmit="return myFunction()" >
<img src="/phot/login_icon_small.png" class="ava3">
<h1>Appointment Booking</h1>
<p>Hospital</p>
<input type="text" name="host" id="host" value="<?php echo $sult ['Hospital'];?>" readonly="readonly">
<p>Doctor</p>
<input type="text" name="doc" id="doc" value="<?php echo $sult ['Doctor'];?>" readonly="readonly">
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
<p id="err2" style="color:Red;">
<h3></h3>
<input type="submit" value="Book" onsubmit="myFunction()">
</form>
<?php
}
?>
</div>
<script>
function myFunction() {
var inpObj = document.getElementById("cont");
  var mai=document.getElementById("mail").value;
  var py=document.getElementById("type").value;
  var ge=document.getElementById("gen").value;
  var userdate = new Date(document.getElementById("date").value).toJSON().slice(0,10);
    var today = new Date().toJSON().slice(0,10);
    if(userdate < today){
      document.getElementById("err5").innerHTML="*Please select a next date";
    return false;	
    }
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
if(py == "Physical"){
	document.getElementById("cov").action="appo.php";	
}		
}
</script>
 </body>
 </html>