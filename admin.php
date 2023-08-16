<html>
<head>
<meta chaeset="UTF-8">
<title>redstore ecommerce website</title>
<link rel="stylesheet" href="admin2.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
var manuItems = documents.getElementById("ManuItems");
manuItems.style.maxHeight = "0px";
function manutoggle(){
	if(manuItems.style.maxHeight == "0px")
	{
		manuItems.style.maxHeight = "200px";
	}
	else
	{
		manuItems.style.maxHeight = "0px";
	}
}
</script>
</head>
<body>
<div class="header">
<div class="containt">
<div class="naver">
<div class="logo">
<img src="yes.jpg" width="100px">
</div>
<nav>
<ul id="manuItems">
   <li><a href="admin.php">Home</a></li>
   <li><a href="e-comm.php">Products</a></li>
   <li><a href="">About</a></li>
   <li><a href="">Contact</a></li>
   <li><a href="">Accounts</a></li>
   <img src="cart.png" width="30px" height="20px" class="manu-icons">
   <img src="png-clipart-hamburger-button-computer-icons-menu-bar-line-angle-rectangle.png" width="30px" height="20px" class="manu-icon" onclick="manuItems">
</ul>
</nav>
</div>
</div>
<div class="row">
<div class="col-2">
<h1>Take a your madicine in</br>new style!</h1>
<p>buy online madicine in our wabsite becose here so many discount co purchase</br>  madicine from here</p>
<a href="e-comm.php"class="btn">Explore now  &#8594;</a>
</div>
<div class="col-2">
<img src="medicine-or-madicine---7-crazy-cures-136389940911603901-140506112820.jpg">
</div>
</div>
</div>

</body>
</html>