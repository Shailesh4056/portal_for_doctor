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
<form action="search2.php" method="post">
<div class="table-responsive">
<div class="search">
<input type="text"name="id" placeholder="Enter a Pasent ID">
<input type="submit" name="search" title="Invalid input" value="search">
</div>
</form>
<h1>Details</h1>
<div class="darkwab">
<table class="table table-bordered table-striped text-black">
<thead>
<th>ID</th>
<th>date</th>
<th>dose</th>
<th>pincode</th>
<th>address</th>
<th>name</th>
<th>adhar</th>
<th>dob</th>
<th>Gender</th>
<th>contact</th>
<th>E-mail</th>
<th>slot</th>
<th>code</th>
<th>status</th>
<th>delete</th>
<th>send mail</th>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","","sem_5user");

$display="SELECT * FROM `18+dos2` WHERE age='18+' And dose='dose 2' ";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
  <tr>
			   <td><?php echo $sult ['id'];?></td>
			   <td><?php echo $sult ['date'];?></td>
			   <td><?php echo $sult ['dose'];?></td>
			   <td><?php echo $sult ['pincode'];?></td>
			   <td><?php echo $sult ['address'];?></td>
			  <td><?php echo $sult ['name'];?></td>
			   	<td><?php echo $sult ['adhar'];?></td>
			   <td><?php echo $sult ['dob'];?></td>
			   <td><?php echo $sult ['Gender'];?></td>
			   <td><?php echo $sult ['Contact'];?></td>
			   <td><?php echo $sult ['E-mail'];?></td>
			  <td><?php echo $sult ['slot'];?></td>
			   <td><?php echo $sult ['code'];?></td>
			   <td><?php echo $sult ['status'];?></td>
                </select>
				</td>
				  <td><div class="dropdown"><span><button type="submit" name = "delete" class="btn" style="background:red; margin-left:110px;"><a href="sanfatch.php">DELETE</button></span><div class="dropdown-content"><p style="color:white; text-decoration:none;">you want delete this event?<br><a href="Delete2.php?id=<?php echo $sult ['id'];?>">yes</a> <a href="sanfatch.php">no</a></p></div></div></td>
				  
					 <td><button type="button" class="btn btn-info"><a href="emf.php" class="text-white"><i class="fa fa-envelope">Send Mail
					 <td><button type="button" class="btn btn-success"><a href="status.php?id=<?php echo $sult['id'];?>" class="text-white"><i class="fa fa-envelope">update
				     
			  
				     </a></button></td>
			   </tr>
			   <?php
}
?>

</div>
</tbody>
</div>
</table>
</body>
</html>