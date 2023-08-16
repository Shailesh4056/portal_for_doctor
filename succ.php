<html>
<head>
</head>
<style>
.bgmc input[type="submit"]
{
	margin-bottom:50px;
    border:none;
	outline:none;
	width:400px;
	height:40px;
	background:red;
	color:#fff;
	font-size:18px;
	border-radius:20px; 
}
.bg input[type="submit"]
{
    border:none;
	outline:none;
	width:400px;
	height:40px;
	background:#20DC1F;
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
.yes{
	margin-top:20px;
	margin-left:100px;
	margin-right:50px;
}

</style>
<body>
<div class="yes">
<p style="border:5px solid ; font-size:50px;">&nbsp&nbsp&nbsp <img src="/phot/done3.jpg" height="40px" width="60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your Transaction is Done Successfully </br> <?php echo(isset($msg))?$msg:""; ?></p>
<table border=1 style="background-color:white; width:700px; height:200px; border:1px solid white; border-collapse:collapse;">
<tbody>		   
		           <tr style="background-color:#000; color:white; font-weight:1000;">
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
				<td>1</td>
					<td><label>BOOKING_ID :</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo $_COOKIE["ORDER_ID"];?>" style="border:1px solid white; text-align:center;" readonly="readonly">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID :</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="20" size="20" name="CUST_ID" autocomplete="off" value="<?php echo $_COOKIE["CUST_ID"];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>First Name :</label></td>
					<td><input id="FirstName" tabindex="3" maxlength="20" size="20" name="FirstName" autocomplete="off" value="<?php echo $_COOKIE["fname"];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				
                 <tr>
					<td>4</td>
					<td><label>email :</label></td>
					<td><input id="LastName" tabindex="4" maxlength="20" size="20" name="LastName" autocomplete="off" value="<?php echo $_COOKIE["mail"];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Transaction Amount :</label></td>
					<td><input id="Tranam" tabindex="4" maxlength="20" size="20" name="Tranam" autocomplete="off" value="<?php echo $_COOKIE["TXN_AMOUNT"];?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>6</td>
					<td><label>Transaction Status :</label></td>
					<td><input id="Transac" tabindex="4" maxlength="20" size="20" name="Transac" autocomplete="off" value="Success" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				</tbody>
				</table>
				<div class="bg">
				<form action="feedback.php">
				<input type="submit" value="feedback" style="margin-left:680px;">
				</form>
				</div>	<div class="bgmc">
				<form action="project home.php">
				<input type="submit" value="HOME" style="margin-left:680px;">
		        </form>
				</div>
		        <p style="border:5px solid #17202A; background-color:#000; color:#fff; font-size:30px;"><img src="google-introduces-gmail-confidential-self-destructing-email-messages_feature.png" height="40px" width="60px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You Received a mail from Heathcare.3153 gmail.com.</p>	
</body>
</html>