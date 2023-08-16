<html>
<head>
<meta chaeset="UTF-8">
<title>redstore ecommerce website</title>
<link rel="stylesheet" href="admin2.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
<div class="naver">
<div class="logo">
<img src="yes.jpg" width="100px">
</div>
<nav>
<ul>
   <li><a href="">Home</a></li>
   <li><a href="">Products</a></li>
   <li><a href="">About</a></li>
   <li><a href="">Contact</a></li>
   <li><a href="">Accounts</a></li>
   <img src="cart.png" width="30px" height="30px">
</ul>
</nav>
</div>
</div>
<div class="maindiv">
			        </div>
<div class="detailes">
<div class="categories">
<div class="small-container">
<div class="row">
<div class="col-3">
<img src="download (2).jpg">
</div>
<div class="col-3">
<img src="61RrUB+TNtL._SL1500_.jpg">
</div>
<div class="col-3">
<img src="Hand-sanitizer.jpg">
</div>
</div>
</div>
</div>



<div class="small-container">
<div class="row rows-2">
<h2>all products</h2>
<select>
<option>default shorting</option>
<option>short by price</option>
<option>short by popularity</option>
<option>short by rating</option>
<option>short by sale</option>
</select>
</div>
<div class="row">
<div class="col-4">
<?php
$conn=mysqli_connect('localhost','root');
$db=mysqli_select_db($conn,'accounts');
$q="select * from `product`";
$p=mysqli_query($conn,$q);
while($solt=mysqli_fetch_array($p)){
	?>

	<?php echo  '<img src="data:image;base64,'.base64_encode($solt['image']).'"alt="image" style = "width:250px; height:250px;">'; ?>
    <?php  echo  $solt['price'];?> RS</h2>
	<?php echo $solt['descr'];?>
	<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
 <button class="btn"><a href="emfo.php?id=<?php echo $sult ['id']; ?>">Add Kart
				     </a></button><br>
					 
<?php
}
?>
</div>
</div>
</div>
</div>
<div class="page-btn">
<span>1</span>
<span>2</span>
<span>3</span>
<span>4</span>
<span>next</span>
</div>
<!------------OFFER------------->
<div class="offer">
<div class="small-container" class="offier-img">
<div class="row">
<div class="col-2">
<img src="Automatic-Sanitizer-Dispenser1-scaled.jpg">
</div>
<div class="col-2">
<p>exclusivly availible on my madical shop.</p>
<h1>smart sanitizer macine</h1>
<small>this product is a very nice becose it's a fully automutic sanitizer macine you purchase this macine only 
on this wabsite becose it's very usfull product!</small>
<a href=""class="btn">BUY NOW &#8594;</a>
</div>
</div>
</div>
</div>
<div class="brands">
<div class="small-container">
<div class="row">
<div class="col-5">
<img src="1280px-Godrej_Logo.svg.png">
</div>
<div class="col-5">
<img src="dc36c1d02dfe2ec192b7ec6d2289cb2d.png">
</div>
<div class="col-5">
<img src="1024px-Coca-Cola_logo.svg.png">
</div>
<div class="col-5">
<img src="paypal-784404_1280.png">
</div>
<div class="col-5">
<img src="bkjbjhb.jpg">
</div>
</div>
</div>
</div>
<div class="footer">
<div class="container">
<div class="row">
<div class="footer-col-1">
<h3>download our app</h3>
<p>downlode App for Androud and ios mobile phone.</p>
<div class="app-logo">
<img src="766286b8-a1f0-4e7a-9327-cf0181a544ca.jpg">
<img src="27300bc6-5442-4eb5-b53d-b85c0ce13d2c.jpg">
</div>
</div>
<div class="footer-col-2">
<img src="yes.jpg">
<p>our purpose is to sustainable make tha pleasure and benefits of sports accessible to tha many.</p>
</div>
<div class="footer-col-3">
<h3>useful links</h3>
<ul>
<li>coupon</li>
<li>blog post</li>
<li>return policy</li>
<li>join affiliate</li>
</ul>
</div>
<div class="footer-col-4">
<h3>follow us</h3>
<ul>
<li><i class="fa fa-instagram">instagram</i></li>
<li><i class="fa fa-twitter-square">twitter</i></li>
<li><i class="fa fa-facebook-official">facebook</i></li>
<li><i class="fa fa-whatsapp">whatsapp</i></li>
</ul>
</div>
</div>
<hr>
<p class="you">made for your halth</p>
</div>
</div>
</body>
</html>