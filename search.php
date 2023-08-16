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
<div class="table-responsive">
<h1>Patient details</h1>
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
 if(isset($_POST['search']))
 {
	 $id=$_POST['id'];
			  
$display= "SELECT `id`, `name`, `gmail`, `mobile_no`, `city`, `pin`, `address`, `gender`, `image` FROM `profil` WHERE id='$id'";
		$result=mysqli_query($con,$display);
if($sult==1){		
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
 }
 else 
 {
	 echo "sorry data is not found....................................."
 }
 }
?>
</div>
</tbody>
</div>
<table>
</body>
</html>