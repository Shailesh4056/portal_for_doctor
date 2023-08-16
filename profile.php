<?php
session_start();
?>
<html>
<body>
<head>
</head>
<div class="profil">
<p><a href=""><p>gmail <?php echo $_SESSION ['gmail']; ?></a></li></p>
<p><a href=""><p>password: <?php echo $_SESSION ['password']; ?></a></li></p>
<div>
</body>
</html>