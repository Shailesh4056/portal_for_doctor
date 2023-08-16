<?php
$conn=mysqli_connect('localhost','root');
$db=mysqli_select_db($conn,'accounts');
$q="select * from `product`";
$p=mysqli_query($conn,$q);
while($solt=mysqli_fetch_array($p)){
	?>
	<?php echo $solt['price'];?>
	<?php echo $solt['descr'];?>
	<?php echo '<img src = "data:image;base64,'.base64_encode($solt['image']).'"alt="image" style = "width:100px; height:100px;">'; ?>
<?php
}
?>
	