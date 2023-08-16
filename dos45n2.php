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
<body onload="myFunction()">
<h1>Booking dates</h1>
<form method="post" onsubmit="return myFunction()">
<div class="darkwab">
<table class="table table-bordered table-red table-hover text-black">
<thead>
<th>Age</th>
<th>date</th>
<th>dose</th>
<th>Available</th>
<th>pin</th>
<th>address</th>
<tbody>

<?php
$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'sem_5admin');
 if(isset($_POST['search']))
 {
	 $pincode=$_POST['pincode'];
	$date=date('y-m-d');
$display= "SELECT `id`, `age`, `dose`, `qwt`, `date`, `pin`, `Address` FROM `45dose2` WHERE pin='$pincode' and date >='$date'";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>
  <tr>
			   <td><?php echo $sult ['age'];?></td>
			   <td><?php echo $sult ['date'];?></td>
			   <td><?php echo $sult ['dose'];?></td>
			   <td id="dose"><?php echo $sult ['qwt'];?></td>
			   <td><?php echo $sult ['pin'];?></td>
			   <td><?php echo $sult ['Address'];?></td>

			  <td>
			  <?php if($sult ['qwt'] !=0){ ?>
			  <button type="button" class="btn btn-info"  id="button"><a href="formdo2.php?id=<?php echo $sult['id']; ?>&sid=<?=$_POST['id'];?>" class="text-white">Book Now
				     </a></button>
					 
			  <?php }else{ ?>
			  <button type="button" class="btn btn-danger">Not Available </button>
			  <?php } ?>
					 </
					 td>
					 <!-- onsubmit="myFunction() -->
			   </tr>
			   
			   <?php
}
 }
?>

</div>
</tbody>
</table>
<script>
</script>
</body>
</html>