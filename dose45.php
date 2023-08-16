 <?php
error_reporting(0);
$id=$_GET['id'];
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'sem_5admin');
$display="SELECT * FROM `45dose1` WHERE id='$id'";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="stlco.css">
</head>
<body>
<div class="logb3">
<form id="cov" action="cov45do1.php" method="POST"  enctype="multipart/form-data" onsubmit="return myFunction()" />
<h1>COVID-19 vaccine booking</h1>
<input type="hidden" name="age" id="age" value="<?php echo $sult ['age'];?>" readonly="readonly">
<input type="hidden" name="date" id="date" value="<?php echo $sult ['date'];?>" readonly="readonly">
<input type="hidden" name="dose" id="dose" value="<?php echo $sult ['dose1'];?>" readonly="readonly">
<input type="hidden" name="pin" id="pin" value="<?php echo $sult ['pin'];?>" readonly="readonly">
<input type="hidden" name="location" id="location" value="<?php echo $sult ['address'];?>" readonly="readonly">
<p>Name</p>
<input type="text" id="name" name="name" placeholder="First Name" required>
<p>Addaar number</p>
<input type="text" id="adhar" name="adhar" placeholder="First Name" required>
<p>Date Of Borth</p>
<input type="date" id="dob" name="dob" placeholder="Enter testing date" required>
<p>Gender</p>
 <select class="select" name="gen" id="gen">
<option value="Gender" disabled >Gender</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Other">Other</option>
 </select>
<p>Contact no</p>
<input type="text" name="Contact" id="cont" placeholder="Enter a contact no" required>
<p id="err" style="color:Red;"></p>
<p>E-mail</p>
<input type="mail" name="mail" id="mail" placeholder="Enter your mail" required>
 <p id="err1" style="color:Red;"></p>
 <p>slot</p>
<select class="select" name="slot" id="slot">
<option value="Slot" disabled>Slot</option>
<option value="9:30-11:30">9:30-11:30</option>
<option value="12:30-2:30">12:30-2:30</option>
<option value="2:30-3:30">2:30-3:30</option>
</select>
<p id="err2" style="color:Red;"></p>
<input type="hidden" id="status" class="form-control" name="status" value="pending"/>
<?php
}
?>
<?php
                    if(isset($_GET['error'])){ ?>
					<p class="err"><?php echo $_GET ['error']; echo "<h1>   </h1>";?></p>
					<?php } ?>
<h3></h3>
<input type="submit" name="submit" value="Book" onSubmit="myFunction()">


</form>
</div>
<script>
function myFunction() {
  var inpObj = document.getElementById("cont");
  var mai=document.getElementById("mail").value;
  var ci=document.getElementById("slot").value;
  
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
  if(ci == "Select City")
  {
	  document.getElementById("err2").innerHTML = "*Please select a slot";
      return false;
  }	
}
</script>
</body>
</html> 