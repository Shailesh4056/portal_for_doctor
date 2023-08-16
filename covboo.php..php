<?php
session_start();
if(!isset($_SESSION['username'])){
	header('locationphp');
}
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="stlco.css">
</head>
<body>
<div class="logb3">
<img src="ect.jpg" class="ava3">
<form action="image-up.php" method="POST" enctype="multipart/form-data">
<h1>COVID-19 Test Booking</h1>
<p>Name</p>
<input type="text" id="fname" name="name" placeholder="First Name" required>
<p>Date</p>
<input type="date" id="date" name="date" placeholder="Enter testing date" required>
<p>Contact no</p>
<input type="text" name="Mobile_no" id="cont" placeholder="Enter a contact no" required>
<p id="err" style="color:Red;"></p>
<p>E-mail</p>
<input type="mail" name="gmail" id="mail" placeholder="Enter your mail" required>
 <p id="err1" style="color:Red;"></p>
 <p>City</p>
<select name="city" id="city">
<option value="Select City">Select City</option>
<option value="Vadodara,Gujarat">Vadodara,Gujarat</option>
<option value="Ahmedabad,Gujarat">Ahmedabad,Gujarat</option>
<option value="Bhuj,Gujarat">Bhuj,Gujarat</option>
<option value="Gandhidham,Gujarat">Gandhidham,Gujarat</option>
</select>
<p id="err2" style="color:Red;"></p>
<h3>   </h3>
<p>Select Test Method</p>
<select name="slotsani" id="slotsani" style="width:100px;">
<option value="Select Test">Select Test</option>
<option value="RT-PCR Test">RT-PCR Test(Results:4 to 5 hours,Price:500)</option>
<option value="TrueNat & CDNAAT Test">TrueNat & CDNAAT Test(Results:60 minutes,Price:1000)</option>
<option value="Rapid Point-Of-Care Antigen Detection Test">Rapid Point-Of-Care Antigen Detection Test(Results:15 minutes,Price:1500)</option>
</select>
<p id="err3" style="color:Red;"></p>
<h3></h3>
<p>Pincode</p>
<input type="number" id="pin" name="pin">
<p>Address</p>
<textarea name="address" id="address" rows="4" cols="30" placeholder="Enter Address" required>
</textarea>
<h3>   </h3>
<input type="radio" name="gender" value="Mail"/>Mail <input type="radio" name="gender" value="Femail">Femail

<h3>   </h3>
<p>Address Proff</p>
<input type="file" name="image" id="Adpr" required>
<p>You have any doctor's prescription?</p>
<select id="se" name="permasion">
<option value="Select">Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<p id="err4" style="color:Red;"></p>
<h3></h3>
<input type="submit" name="" value="Book" onSubmit="myFunction()">


</form>
</div>
<script>
function myFunction() {
  var inpObj = document.getElementById("cont");
  var mai=document.getElementById("mail").value;
  var ci=document.getElementById("city").value;
  var te=document.getElementById("slotsani").value;
  var ks=document.getElementById("se").value;
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
	  document.getElementById("err2").innerHTML = "*Please select a city";
      return false;
  }
  if(te == "Select Test")
  {
	 document.getElementById("err3").innerHTML = "*Please select a test";
      return false; 
  }
if(ks == "Select")
{
	document.getElementById("err4").innerHTML = "*Please select a Yes or No";
      return false; 
}	
}
</script>
</body>
</html>