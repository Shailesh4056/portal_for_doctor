<html>
<head>
</head>
<style>
.bgmc input[type="submit"]
{
    border:none;
	outline:none;
	width:400px;
	height:40px;
	background:#ff3399;
	color:#fff;
	font-size:18px;
	border-radius:20px; 
}
.bgmc input[type="submit"]:hover
{
	cursor:pointer;
	background:blue;
	color:#000;
}
</style>
<body>
<p style="border:5px dashed #0080ff; font-size:50px;">&nbsp&nbsp&nbsp <img src="/phot/done3.jpg" height="40px" width="60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Booking is Book Successfully</p>
<table border=1 style="background-color:white; width:700px; height:200px; border:1px solid white; border-collapse:collapse;">
<tbody>		   
		           <tr style="background-color:#ff3399; color:white; font-weight:1000;">
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				
				
				<tr>
					<td>1</td>
					<td><label>Hospital :</label></td>
					<td><input id="Hospital" tabindex="3" maxlength="20" size="20" name="Hospital" autocomplete="off" value="<?php echo $_POST['host'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				
                 <tr>
					<td>2</td>
					<td><label>Doctor :</label></td>
					<td><input id="Doctor" tabindex="4" maxlength="20" size="20" name="Doctor" autocomplete="off" value="<?php echo $_POST['doc'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>First Name :</label></td>
					<td><input id="FirstName" tabindex="4" maxlength="20" size="20" name="FirstName" autocomplete="off" value="<?php echo $_POST['fname'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Last Name :</label></td>
					<td><input id="LastName" tabindex="4" maxlength="20" size="20" name="LastName" autocomplete="off" value="<?php echo $_POST['lname'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				
				</tbody>
				</table>
				<p style="border:2px solid #0080ff; font-size:20px;"><img src="/phot/done3.jpg" height="40px" width="60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You Received a mail from covidclinic.doctors@gmail.com.</p>	
		        <div class="bgmc">
				<form action="project home.php">
				<input type="submit" value="HOME" style="margin-left:680px;">
		        </form>
				</div>
				<div class="bgmc">
				<form action="seap.php">
				<input type="submit" value="Appointment" style="margin-left:680px;">
				</form>
				</div>	
			
</body>
</html>