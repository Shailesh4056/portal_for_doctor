<?php	
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="text.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<form action="search.php" method="post">
<div class="table-responsive">
<div class="search">
<input type="text"name="id" placeholder="Enter a Pasent ID">
<input type="submit" name="search" pattern="[^'\x22]+" title="Invalid input" value="search">
</div>
</form>
<h1>pasent detilies hare</h1>
<div class="darkwab">
<table class="table table-bordered table-striped text-black">
<thead>
<th>id</th>
<th>name</th>
<th>gmail</th>
<th>mobile_no</th>
<th>city</th>
<th>pin</th>
<th>address</th>
<th>gender</th>
<th>image</th>
</thead>
<tbody>
<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'accounts');
       $name=$_POST['name'];
	   $gmail=$_POST['gmail'];
	   $mobile_no=$_POST['mobile_no'];
	   $address=$_POST['address'];
	   $gender=$_POST['gender'];
	   $files=$_FILES['image'];

			  
$display="select* from profil";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
  <tr>
			   <td><?php echo $sult ['id'];?></td>
			   <td><?php echo $sult ['name'];?></td>
			   <td><?php echo $sult ['gmail'];?></td>
			   <td><?php echo $sult ['mobile_no'];?></td>
			   <td><?php echo $sult ['city'];?></td>
			   <td><?php echo $sult ['pin'];?></td>
			   <td><?php echo $sult ['address'];?></td>
			   <td><?php echo $sult ['gender'];?></td>
			   <td><?php echo '<img src = "data:image;base64,'.base64_encode($sult['image']).'"alt="image" style = "width:100px; height:100px;">'; ?></td>
			   </tr>
			   <?php
}
?>
<?php
error_reporting(0);
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'accounts');
 if(isset($_POST['search']))
 {
	 $id=$_POST['id'];
			  
$display="SELECT `id`, `name`, `gmail`, `mobile_no`, `address`, `gender`, `image` FROM `profil` WHERE id='$id'";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
  <tr>
			   <td><?php echo $sult ['id'];?></td>
			   <td><?php echo $sult ['name'];?></td>
			   <td><?php echo $sult ['gmail'];?></td>
			   <td><?php echo $sult ['mobile_no'];?></td>
			   <td><?php echo $sult ['address'];?></td>
			   <td><?php echo $sult ['gender'];?></td>
			   <td><?php echo '<img src = "data:image;base64,'.base64_encode($sult['image']).'"alt="image" style = "width:100px; height:100px;">'; ?></td>
			    <button class="btn-danger btn"><a href="Delete.php?id=<?php echo $sult ['id'];?>" class="text-white">Delete
				     </a></button></td>
			   </tr>
			   <?php
}
 }
?>
</div>
</tbody>
</div>
<table>
</body>
</html>