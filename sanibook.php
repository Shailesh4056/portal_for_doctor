<?php
 //require('TxnTest.php');
 
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'accounts');
if(isset($_POST['Book']))
{
$name=$_POST['name'];
	   $date=$_post['date'];
	   $slotsani=$_POST['slotsani'];
	   $lol=$_POST['lol'];
	   $slot=$_POST['slot'];
	   $Mobile_no=$_POST['Mobile_no'];
	   $mail=$_POST['mail'];
	   $city=$_POST['city'];   
	   $pin=$_POST['pin'];
	   $address=$_POST['address'];
      $cov=$_POST['cov'];

	  $q="INSERT INTO `sanatizer`(`name`, `date`, `slotsani`, `lol`, `slot`, `Mobile_no`, `mail`, `city`, `pin`, `address`, `cov`) VALUES ('$name', '$date', '$slotsani', '$lol', '$slot', '$Mobile_no', '$mail', '$city', '$pin', '$address', '$cov')";
      $result=mysqli_query($con,$q);
}
?>


////////////////////
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
<link rel="stylesheet" type="text/css" href="stl3.css">
<script>
function randum(){
	var a=document.getElementById('slotsani').value;
	document.getElementById('output').innerHTML=a;
    if(a==="Home")
	{
		var array=["bhk",1,2,3,4,5,6,7,8,9,10,11,12];
	}
    else if(a==="Office or Gym")
    {
		var array=["floors",1,2,3,4,5,6,7,8,9,10,11,12];
	}
    else if(a==="Building")
	{
		var array=["floors",1,2,3,4,5,6,7,8,9,10,11,12];
	}
	else if(a==="Vehicles")
	{
		var array=["select","Truck","Bus","Car"];
	}
	else
	{
		var array=["Select Place"];
	}
	var str="";
	for(i=0;i<array.length;i++)
	{
		str=str+"<option value="+array[i]+">"+array[i]+"</option>"; 
	}
	str="<select name='lol' id='lol'>"+str+"</select>";
	document.getElementById('output').innerHTML=str;
}	
</script>
</head>
<body>
<div class="logb4">
<img src="ect.jpg" class="ava4">
<form action="sandata.php" method="POST" enctype="multipart/form-data" onsubmit="return myFunction()">
<h1>Sanitizing Booking</h1>
<p>Name</p>
<input type="text" id="fname" name="name" placeholder="First Name" value="<?php echo $sult ['Hospital'];?>" readonly>
<p>Date</p>
<input type="date" id="date" name="date" placeholder="Enter testing date" required>
<p>Sanitization For</p>
<select name="slotsani" id="slotsani" onchange="randum()" required>
<option value="Select Place">Select Place</option>
<option value="Home">Home (1 floor 400 RS)</option></button>
<option value="Office or Gym">Office or Gym(1 floor 600 RS)</option>
<option value="Building">Building(1 floor 2000 RS)</option>
<option value="Vehicles">Vehicles(1 Vehicles 600 RS)</option>
</select>
<p id="err4"></p>
<h3></h3>
<p>Select area</p>
<div id="output" name="lol">
<select required>
<option></option>
</select>
</div>
<p id="err5"></p>
<h3></h3>
<p>Select Slots</p>
<select name="slot" id="slot" required>
<option value="select">select</option>
<option value="Morning">Morning</option>
<option value="Afternoon">Afternoon</option>
<option value="Evening">Evening</option>
</select>
<p id="err3"></p>
<h3></h3>
<p>Contact no</p>
<input type="number" name="Mobile_no" id="cont" placeholder="Enter a contact no" required>
<p id="err" style="color:Red;"></p>
<p>E-mail</p>
<input type="mail" name="mail" id="mail" placeholder="Enter your mail" required>
<p id="err1" style="color:Red;"></p>
<p>City</p>
<select name="city" id="city" required>
<option value="Select City">Select City</option>
<option value="Vadodara,Gujarat">Vadodara,Gujarat</option>
<option value="Ahmedabad,Gujarat">Ahmedabad,Gujarat</option>
<option value="Bhuj,Gujarat">Bhuj,Gujarat</option>
<option value="Gandhidham,Gujarat">Gandhidham,Gujarat</option>
</select>
<p id="err2" style="color:Red;"></p>
<h3>   </h3>
<p>Pincode</p>
<input type="number" id="pin" name="pin" required>
<p>Address</p>
<textarea name="address" id="address" rows="4" cols="30" placeholder="Enter Address" required>
</textarea>
<h3>   </h3>
<p>You are tested positive for coronavirus or organization member?</p>
<h2></h2>
<select name="cov" id="cov" required>
<option>Select</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<h3></h3>
<input type="submit" name="Book" value="Book">
</form>
<?php
}
?>
</div>
<script>
function myFunction() {
  var inpObj = document.getElementById("cont");
  var mai=document.getElementById("mail").value;
  var ci=document.getElementById("city").value;
  var s=document.getElementById("slot").value;
  var sa=document.getElementById("slotsani").value;
  var ka=document.getElementById("lol").value;
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
  if(s == "select")
  {
	  document.getElementById("err3").innerHTML = "*Please select sanitization slots";
      return false;
  }
  if(sa == "Select Place")
  {
	  document.getElementById("err4").innerHTML = "*Please Select Place";
      return false;
  }
  if((ka == "floors") || (ka == "bhk") || (ka == "Vehicles"))
  {
	  document.getElementById("err5").innerHTML = "*Please Select Area";
      return false;
  }
}  
</script>
</body>
</html> 