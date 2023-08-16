<html>
<head>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding-top: 50px;
}
 
.card {
    box-shadow: 0 5px 5px 5px #e1e1e1;
    max-width: 350px;
    padding: 15px;
    border-radius: 5px;
    margin: auto;
    text-align: center;
}
 
img {
    width: 50%;
    border: 5px solid #e1e1e1;
    border-radius: 50%;
}
 
.social {
    margin: 15px 0;
}
 
a {
    font-size: 26px;
    padding: 7px 12px;
    text-decoration: none;
    color: #585858;
    border: 1px solid #e1e1e1;
    border-radius: 10px;
}
 
a:hover {
    background-color: #585858;
    color: #ffffff;
}
table, table tr td {
    width: 290px;
    margin: 0 auto;
    border: 1px solid #e1e1e1;
    text-align: left;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","sem_5user");

	 $id=$_POST['id'];
			  
$display="SELECT * FROM `18+dos1` WHERE id='$id' and status='success'";
		$result=mysqli_query($con,$display);
if(mysqli_num_rows($result)==1){ ?>
<?php
while($sult=mysqli_fetch_array($result)){
?>
    <div class="card">
        <h2>your Dose1 Information</h2>
	<tr>
            <table>
            <tr>
                <td><strong>ID</strong></td>
                <td><?php echo $sult ['id'];?></td>
            </tr>
            <tr>
                <td><strong>date</strong></td>
                <td><?php echo $sult ['date'];?></td>
            </tr>
            <tr>
                <td><strong>dose</strong></td>
                <td><?php echo $sult ['dose'];?></td>
            </tr>
            <tr>
                <td><strong>pincode</strong></td>
                <td><?php echo $sult ['pincode'];?></td>
            </tr>
            <tr>
                <td><strong>address</strong></td>
                <td><?php echo $sult ['address'];?></td>
            </tr>
			<tr>
                <td><strong>fname</strong></td>
                <td><?php echo $sult ['name'];?></td>
            </tr>
			<tr>
                <td><strong>adhar</strong></td>
                <td><?php echo $sult ['adhar'];?></td>
            </tr>
			<tr>
                <td><strong>Date of Borth</strong></td>
                <td><?php echo $sult ['dob'];?></td>
            </tr>
			<tr>
                <td><strong>Gender</strong></td>
                <td><?php echo $sult ['Gender'];?></td>
            </tr>
			<tr>
                <td><strong>Contact</strong></td>
                <td><?php echo $sult ['Contact'];?></td>
            </tr>
			<tr>
                <td><strong>E-mai</strong></td>
                <td><?php echo $sult ['E-mail'];?></td>
            </tr>
			<tr>
                <td><strong>slot</strong></td>
                <td><?php echo $sult ['slot'];?></td>
            </tr>
			<tr>
                <td><strong>code</strong></td>
                <td><?php echo $sult ['code'];?></td>
            </tr>
						<tr>
                <td><strong>status</strong></td>
                <td style="margin-left: 20%; color: #14DE69;"><?php echo $sult ['status'];?></td>
				
            </tr>
			<tr>
			        <td>
					<?php
                     $Date =  $sult ['date'];
                    $j= date('Y-m-d', strtotime($Date. '28 days'));
                    echo $j;
					$d= date("Y-m-d");
			        echo $d;

?>					
		             <?php if(date("Y-m-d")>$j){ ?>
					 <?php 	$to=$sult ['E-mail'];
	                   $sub="Covid-19 Vaccine Booking";
   	                    $body="\n,Your Secound Dose Is Open Now For You .  With warm regard.";
                       $headers="From:healtcare.3153@gmail.com";
mail($to,$sub,$body,$headers);?> 
					<a href="18d2search.php?id=<?php echo $sult['id']; ?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-calendar"></span> dose2
        </a>
		
					  <?php }else{ ?>
					 
			  <button type="button" class="btn btn-danger">Not Available </button>
			    <td><?php echo '<p style="margin-left: 20%; color: red; ">
  Please Take Your Secound Dose After 28 Day</p>'; 
	
	?></td>
			  <?php } ?>
</td>
</tr>

<?php
}
?>
	</tr>
			   <?php
}		
else{
?>
  <?php echo '<h1 style="margin-left: 20%; color: red; ">Sorry Your First Dose Is Still Remaning
  Please Take Your First Dose After That Apply For Secound Dose ....................</h1>'; 
	
	?>
			   
			   <?php
}
?>

<html>
<head>
</head>
<body>