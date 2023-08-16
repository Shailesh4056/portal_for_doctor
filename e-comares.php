<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'project3');
$query="SELECT `id`, `name`, `image`, `price`, `discount` FROM `commerecs`order by id ASC";
$qy=mysqli_query($conn, $query);
$num=mysqli_num_rows($qy);
if($num>0){
	while($product= mysqli_fetch_array($qy)){
		?>
		<div class="col-log-3 col-md-3 col-sm-12">
		<form>
		<div class="card">
		<h6 class="card-title"><?php echo $product['name'];?></h6>
		<div class="card-body">
		<img src="<?php echo $product['image']; ?>">
		</div>
		</div>
		</form>
		</div>
		<?php
	}
}
?>
</body>
</html>