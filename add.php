<html>
<head>
<head>
<body>
<?php

$id = $_GET['id'];
?>
<form action="add2.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
<input type="file" name="image" id="image"/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


 