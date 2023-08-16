<?php
session_start();
?>
<html>
<head>
<title>regrastration form</title>
<link rel="stylesheet"type="text/css"a href="controls.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="containt">
<img src="ect.jpg" class="etc"/>
<h1>Login Here</h1>
<form method="post"action="validation.php">

<div class="form_input">
<p>username</p>
<input type="username"name="username"placeholder="please enter a username" required />
</div>
<div class="form_input">
<p>password</p>
<input type="password"name="password" pattern=".{8,}" title="Eight or more characters" placeholder="please enter a password" required  />
</div>
<?php
                    if(isset($_GET['error'])){ ?>
					<p class="err"><?php echo $_GET ['error']; echo "<h1>   </h1>";?></p>
					<?php } ?>
<br>
<input class="button" type="submit" id="login" name="login" value="login"/><br>
<a href="regrastratio.php">Registar Now</a>
</form>
</div>
</body>
</html>