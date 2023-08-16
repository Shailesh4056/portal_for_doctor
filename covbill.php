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
	background:#C39BD3;
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
<p style="border:2px solid #E74C3C; font-size:30px; margin-left:25px;">&nbsp&nbsp&nbsp <img src="/phot/done3.jpg" height="40px" width="60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Vaccination is Booked Successfully</p>
<table border=1 style="background-color:white; width:700px; height:200px; border:1px solid white; border-collapse:collapse;">
<tbody>		   
		           <tr style="background-color:#48C9B0 ; color:white; font-weight:1000;">
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				
				
				<tr>
					<td>1</td>
					<td><label>center :</label></td>
					<td><input id="Hospital" tabindex="3" maxlength="50" size="50" name="location" autocomplete="off" value="<?php echo $_POST['location'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				
                 <tr>
					<td>2</td>
					<td><label>vaccine date :</label></td>
					<td><input id="Doctor" tabindex="4" maxlength="50" size="50" name="date" autocomplete="off" value="<?php echo $_POST['date'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				                 <tr>
					<td>3</td>
					<td><label>dose :</label></td>
					<td><input id="Doctor" tabindex="5" maxlength="30" size="30" name="dose" autocomplete="off" value="<?php echo $_POST['dose'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>First Name :</label></td>
					<td><input id="FirstName" tabindex="4" maxlength="50" size="50" name="FirstName" autocomplete="off" value="<?php echo $_POST['name'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Last Name :</label></td>
					<td><input id="LastName" tabindex="4" maxlength="50" size="50" name="LastName" autocomplete="off" value="<?php echo $_POST['Contact'];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				</tbody>
				</table>
				<p style="border:2px solid #76D7C4; font-size:20px;"><img src="google-introduces-gmail-confidential-self-destructing-email-messages_feature.png" height="40px" width="60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You Received a mail from healtcare.3153@gmail.com.</p>	
		        <div class="bgmc">
				<form action="project home.php">
				<input type="submit" value="HOME" style="margin-left:680px;">
				<a href="window.picture" download rel="noopener noreferrer" target="_blank">
   Download File
</a>
<button onclick="window.print()"></button>

<script>
function save(filename, html) {
  var el = document.createElement('a');
  el.setAttribute('href', 'data:picture.jpg;charset=utf-8,' + encodeURIComponent(html));
  el.setAttribute('download', filename);
  el.style.display = 'none';
  document.body.appendChild(el);
  el.click();
  document.body.removeChild(el);
}
</script>

<!--or-->
<!--link-->
<a href="the/name/of/your/file.x" download>
		        </form>
				</div>	
			
</body>
</html>