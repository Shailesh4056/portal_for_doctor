
<html>
  <head>
    <title>Portal For Doctors</title>
     <script type="text/javascript">
	 $(function(){
		 $(window).bind("beforeunload",function(){
			 fnLogOut();
		 })
	 });
	 function fnLogout(){
		 alert('Your account is automatically logout');
	 }
	 </script>
<meta name="viewport" content="width=device-width, initial-scale=1">   
 <style>
      * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
      
    </style>

	<link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  
  <header>
	<div class ="main">
	<img src="/phot/logo.png" width="300px" height="50px" style="margin-left:50px;">
	<ul style="font-weight:bold;">
	         <li><a href="int3.php">Home</a></li>
    	         <li>Hy,
				 <?php  
			 
				 echo $_COOKIE["username"];
				 ?></li>
    	         <li><a href="logout.php">Log Out</a></li>
  	         <li><a href="#">About Us</a></li>
	</ul>
	</div>
</header>
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="sanibook.php"><img src="/phot/sl1.png" style="width:100%" height=400px href="covbook.php"></a>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="covbook.php"><img src="/phot/sl3.png" height=400px style="width:100%"></a>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="seap.php"><img src="/phot/sl2.png" style="width:100%" height=400px></a>
  
</div>




<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex=0;
showSlides();

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides,6000);
}
</script>
 
<div style= "background-color:#003399;">
<h1>                             </h1><br />
<a href="covbook.php" ><img src="/phot/cov.png" style="width:100%; height:130px; max-width:355px; border-radius:8px;"></a>
<a href="sanibook.php"><img src="/phot/sanii.png" style="width:100%; height:130px; max-width:355px; border-radius:8px;"></a>
<a href="seap.php"><img src="/phot/appoi.png" style="width:100%; height:130px; max-width:355px; border-radius:8px;"></a>
<h1>                               </h1><br />
</div><br />
<h1></h1><br />
<h1></h1><br />
</h1></h1><br />
<div>
<p>
<h1 style="align:left">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRead top articles from<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsphealth experts</h1>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://health.economictimes.indiatimes.com/news/industry/covid-19-best-sources-of-protein-essential-vitamins-for-immunity/77196004"><img src="/phot/art1.png" width=300px height=400px style="border-radius:8px; align:right;"></a>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html"><img src="/phot/art2.png" width=300px height=400px style="border-radius:8px; align:right;"></a>
<br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHealth articles that keep you informed about good <br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsphealth practices and achieve your goals.
</p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button style="color:white; text-align:center; display:inline-block; font-size:25px; margin:9px 2px; cursor:pointer; background-color:#33ccff; border:5px solid blue;">See More</button>
</div>
<div style="background-color:#003399;">
<h1>  </h1><br />
<a href="https://www.who.int/health-topics/coronavirus"><img src="/phot/infocov1.png" width=300px height=400px style="border-radius:8px;"></a>
<a href="https://youtu.be/BtN-goy9VOY"><img src="/phot/infocov2.png" width=300px height=400px style="border-radius:8px;"></a>
<a href="https://youtu.be/5DGwOJXSxqg"><img src="/phot/infocov3.png" width=300px height=400px style="border-radius:8px;"></a>
<p style="width:10px; height:10px; color:#fff; margin-left:1000px; margin-top:-200px;" > Updates on Covid-19</p>
<a href="https://www.worldometers.info/coronavirus/"><input type="submit" value="view" style="height:40px;
	background:#fb2525;
	color:#fff;
	font-size:20px;
	border-radius:20px; margin-left:1000px; margin-top:70px; width:60px;"></a>
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />
<h1></h1><br />


</div>
<div style="background-color:#fff;">
<h1></h1><br />
</div>
<div class="main" style="background-color:#fff;">
<h1>  </h1><br />
<ul style="font-weight:bold; margin-right:260px; margin-bottom:-30px;">
	         <li><a href="contact.php">Contact Us</a></li>
    	         
    	       </ul>
  	         
	
<img src="/phot/logo.png" width="300px" height="50px" style="margin-left:400px;">
<ul style="font-weight:bold; margin-right:670px; margin-top:-35px;">
<li><a href="ab.php">About Us</a></li>
</ul>
<h1></h1><br />
</div>
</body>

</script>
</html>