<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
  *{
	  margin:0;
	  padding:0;
  }
  body{
	  background-color:#fff;
	  background-position:center;
	  background-size:cover;
	  margin-top:40px;
  }
  .hos{
	  width:800px;
	  background-color:rgba(0,0,0,0.8);
	  margin:auto;
	  color:#fff;
	  padding:10px 0px 10px 0px;
	  text-align:center;
	  border-radius:15px 15px 0px 0px;
  }
  .main{
	  border:1px solid #000;
	height:1100px;
	width:550px;
	margin:30px auto;
	box-shadow:1px 3px 20px 6px #ddd;
	background-color:rgba(0,0,0,0.5);
  }
  #name input,textarea,select{
	  margin-top:1px;
	margin-bottom:10px;
	background-color:inherit;
	padding:16px;
	border:1px solid #fff;
	border-radius:5px;
	width:80%;
	margin-left:10%;
	margin-right:10%;
	color:#fff;
}
 #name option {
	 margin-top:2px;
	margin-bottom:20px;
	background-color:inherit;
	padding:16px;
	border:1px solid #fff;
	border-radius:5px;
	width:80%;
	margin-left:10%;
	margin-right:10%;
	color:#000;
	
 }
  #name p{
	  color:#fff;
	margin-top:10%;
	margin-left:10%;
	font-size:calibri
  }
   #btn input{
	 background-color:#2ECC71;
	 border:none;
	 outline:none;
	 padding:12px;
	 color:#fff;
	 
	 text-shadow:1px 1px 2px #fff;
	 margin-top:2%;
	 cursor:pointer;
   }
  form{
	  padding:10px;
  }
</style>
</head>
<body>
<div class="hos"><h1></h1></center> 
</div>
<div class="main">
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return myFunction()">
<div id="name">
<p>Name</p>
<input type="text" name="Hospital" id="host">
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="female">male</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="female">female</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">Other</label>
<p>Pincode</p>
<input type="number" id="pin" name="Pincode" required>
<p>Address</p>
<textarea name="Address" id="address" rows="4" cols="30" placeholder="Enter Address" required>
</textarea>
<p>Qualification type</p>
<select name="city" id="" name="type" required>
<option value="Select City"></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""> </option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
<p>Contact no</p>
<input type="number" name="Contact" id="cont" placeholder="Enter a contact no" required>
<p id="err" style="color:Red;"></p>
<p>E-mail</p>
<input type="mail" name="Email" id="mail" placeholder="Enter your mail" required>
<p id="err1" style="color:Red;"></p>
</div>
<div id="btn">
<center>
<h3></h3>
<input type="submit" name="submit" value="Insert Records">
</center>
</div>
</form>
</div>
<script>
</script>
</body>
</html> 