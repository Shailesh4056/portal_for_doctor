<html>
<head>
<title>regrastration form</title>
<link rel="stylesheet"type="text/css"a href="style2.css"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="background-color:grey;">
<div class="containt">
<img src="ect.jpg"class="project">
<h1>Regrastration Here</h1>
<form method="post"action="registration.php" enctype="multipart/form-data">
<div class="form_input">
<p>username</p>
<input type="username"name="username"placeholder="please enter a username" required />
</div>
<div class="form_input">
<p>password</p>
<input type="password"name="password" pattern=".{8,}" title="Eight or more characters" placeholder="please enter a password" required />
</div>
<div class="form_input">
<p>mobile_no</p>
<input type="text" id="cont" name="mobile_no"  maxlength="10"   placeholder="Enter a contact no" required />
</div>
<div class="form_input">
<p>address</p>
<textarea name="address"rows="2" cols="35"placeholder="please enter a address"/ required ></textarea>
</div>
<div class="form_input">
<p>gender</p>
<input type="radio"name="gender"value="male" required >male
<input type="radio"name="gender"value="female" required >female
</div>
<br>
<?php
                    if(isset($_GET['error'])){ ?>
					<p class="err"><?php echo $_GET ['error']; echo "<h1>   </h1>";?></p>
					<?php } ?>
<input type="submit"value="submit" name="submit"><br>
</form>
</div>
</body>
</html>