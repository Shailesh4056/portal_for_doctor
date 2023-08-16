<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Organ Donation</title>
	<link href="style12.css" rel="stylesheet">
	<style>
		header {
				width: 100%;
				height: 20vh;
				background-image: linear-gradient(rgb(153 51, 102));
				}
				nav {
  width: 100%;
  height: 20vh;
  background: rgb(153, 51, 102);
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-transform: uppercase;
}

nav .logo {
  width: 25%;
  text-align: center;
  /*background: red;*/
}
	</style>
</head>
<body>
<header>
        
<nav>
        <div> <h3 align="Center"> Bring a life back to power<br> Make organ donation your responsibility</h3></div>
</nav>



</header>
	<div class="warpper">
		<div class="main">
			<div class="head"><p>Organ Donation</p></div>
			<div class="form">
				<form action="organ.php" method = "POST" enctype="multipart/form-data">
		
				<p class="name">FIRST NAME:</p>
				<p><input type="text" name="FirstName" placeholder="First Name" class="name-inp"></p>
						
				<p class="name">LAST NAME:</p>
				<p><input type="text" name="LastName" placeholder="Last Name" class="name-inp"></p>
						
					
				<p class="name">DATE OF BIRTH:</p>
				<p><input type="date" name="dob" min="01-04-1998" max="01-04-2020" class="date-inp" ></p>
						
	
							<p class="name">EMAIL ID:</p>
							<p><input type="email" name="EmailID" placeholder="88888@gmail.com" class="name-inp"></p>
						
						
							<p class="name">MOBILE NUMBER:</p>
							<p><input type="text" name="MOBILENUMBER" placeholder="10 digits number" class="name-inp"></p>
						
						
							<p class="gender">
							<span class="gen">GENDER:</span>
							<input type="radio" name="gender" class="male" value="male">MALE
								<input type="radio" name="gender" class="Female" value="female">Female
							
						
							<p class="name">ADDRESS:</p>
							<p><textarea cols="60" rows="10" name="ADDRESS" class="name-inp"></textarea></p>
						
							<p class="name">CITY:</p>
							<p><input type="text" name="City" class="name-inp"></p>
						
							<p class="name">PIN CODE:</p>
							<p><input type="text" name="Pincode" class="name-inp"></p>
						
							<p class="name">STATE:</p>
							<p class="state"><select name="State">
								<option>jharkhand</option>
								<option>Bihar</option>
								<option>Haryana</option>
								<option>Uttar Pradesh</option>
								<option>Gujarat</option>
							</select></p>
						
							<p class="name">COUNTRY</p>
							<p><input type="text" name="Country" value="India" readonly="readonly" class="name-inp"></p>
							
					
						<p>
							<input type="submit" name="submit" value="SUBMIT" class="sub">
							
							<input type="reset" name="reset" value="RESET"  class="sub"></p>
						
						

				</form>
			</div>
		</div>
	</div>
			

</body>
</html>