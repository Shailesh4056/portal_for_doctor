<?php
   $con=mysqli_connect("localhost","root","","sem_5user");
header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    setcookie("fname",$_POST['fname'],time()+(600),"/");
	setcookie("User_Id",$_POST['User_Id'],time()+(4000),"/");
    setcookie("lname",$_POST['lname'],time()+(600),"/");
    if(isset($_POST['gen'])){
	setcookie("gen",$_POST['gen'],time()+(600),"/");
	}
	$a="null";
	if(isset($_POST['host'])){
		setcookie("host",$_POST['host'],time()+(600),"/");
	}
	setcookie("date",$_POST['date'],time()+(600),"/");
	setcookie("timeslot",$_POST['timeslot'],time()+(600),"/");
	setcookie("cont",$_POST['cont'],time()+(600),"/");
	setcookie("mail",$_POST['mail'],time()+(600),"/");
	if(isset($_POST['city'])){
	setcookie("city",$_POST['city'],time()+(600),"/");
	}
	if(isset($_POST['doc'])){
		setcookie("doc",$_POST['doc'],time()+(600),"/");
	}
	if(isset($_POST['type'])){
		$v=200;
		setcookie("type",$_POST['type'],time()+(600),"/");
	} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<link rel="stylesheet" type="text/css" href="pcss.css">
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<pre>
	</pre>
	<div class="bgm">
		<div class="bgmc">
		<div class="close">+</div>
		<p></p>
	<form method="POST" action="pgRedirect.php">
           <table border=1 style="background-color:white; width:800px; height:200px; border:1px solid white; border-collapse:collapse;">
            <tbody>		   
		           <tr style="background-color:#fff; color:#000; font-weight:1000;">
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>BOOKING_ID :</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" style="border:1px solid white; text-align:center;" readonly="readonly">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID :</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="20" size="20" name="CUST_ID" autocomplete="off" value="<?php echo"CUST00" . rand(1,999999)?>" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID :</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="20" size="20" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="border:1px solid white; text-align:center;" readonly="readonly"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel :</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="20"
						size="20" name="CHANNEL_ID" autocomplete="off" value="WEB" style="border:1px solid white; text-align:center;" readonly="readonly">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Amount:</label></td>
					<td>Rs<input title="TXN_AMOUNT" tabindex="20"
						type="text" name="TXN_AMOUNT" id="TXN_AMOUNT"
		   				value="<?php echo $v;?>" style="border:1px solid white; text-align:center;" readonly="readonly">
					</td>
				</tr>
                  <tbody>
</table>		  
					<h2></h2>
					<input value="Pay Now" type="submit" onclick="">
				    
			</div>
</div>	
		
      
	</form>
	</div>
</div>	
</body>
</html>
