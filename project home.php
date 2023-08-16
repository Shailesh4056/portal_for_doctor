<?php
session_start();
?>
<html>
<head>
	 </script>
<meta chaeset="UTF-8">
<link rel="stylesheet" href="styl3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<style>
*
{
    margin: 0;
    padding: 0; 
}
.nav-bar{
    background:rgba(0,0,0,0.6);
    color: #fff;
    padding: 20px;
    font-family: sans-serif;
}
.nav-bar img{
    height: 45px;
    float: left;
    margin-left: 20px;
}
.menu-right a{
	color:fff;
}
img{
	border-radius:5px;
}

.menu-right{
    text-align: right;
}
ul li{
    display: inline-block;
    margin: 20px;
    list-style: none;
    
}

span{
    margin: 0 20px;
    font-size: 28px;
    cursor: pointer;
    display: none;
}

@media only screen and (max-width: 700px){
    span
    {
        display: block;
    }
    ul li{
        display: block;
    }
    ul{
        display: none;
    }
}
.container {
	border:2px solid #000;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    position: relative;
}

.container .box {
    width: 400px;
    height: 500px;
    line-height: 1.5;
    color: #fff;
    display: flex;
    border-radius: 8px;
    /* untuk 3 card */
    margin-right: 40px;
    transition: all .5s; 
}


.box {
    background-image: url(143408801-video-chat-of-doctor-and-old-patient-on-smartphone.jpg);
    width: 50px;
    height: 30px;
    background-size: cover;
    background-repeat: no-repeat;
    box-shadow: 0 10px 20px rgba(0,0,0,.7);
    border-radius: 8px;
}

.box h1 {
    font-size: 20px;
}

.box p{
    font-size: 12px;
}

.box .btn {
    outline: none;
    border: none;
    padding: 5px 10px;
    background: transparent;
    cursor: pointer;
    color: #fff;
    margin: 10px 0 20px 0;
    border: 1px solid #fff;
    transition: all .5s;
}

.box .btn:hover {
    padding: 5px 20px;
}

.text {
    background-color: rgba(0,0,0,.6);
    opacity: 0;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
  padding: 0 10px;
    text-align: center;
    border-radius: 8px;
    transition: all .5s;
}

.text:hover {
    opacity: 1;
}

.box:hover {
    transform: translateY(20px);
}

.two {
    background-image: url(book-your-medical-appointment-online-using-mobile-app-doctor-sitting-desk-background-wearing-face-mask-190595834.jpg);
}
.three {
    background-image: url(https://images.unsplash.com/photo-1592196684243-9e328837adcd?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
}
.four {
    background-image: url(https://images.unsplash.com/photo-1592196684243-9e328837adcd?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
}
	</style>
</head>
<body>

<div class="logo">

</div>
<div class="hader">
<div class="logo">

 
</div>

     <div class="nav-bar">
         
         <div class="menu-right">
             <span onClick="myFunction()">&#9776;</span>
            <ul id="menu">
             <li>HOME</li>    
             <li>SERVICES</li>    
             <li>BLOGS</li>    
             <li>ABOUT</li>    
             <li>CONTACT</li>  
			 <li>
             <img src="ect.jpg" width="30" height="20"><a href="pf.php"><p>welcome <?php echo $_SESSION ['email']; ?>
			 </a>
			 </li>
			 </p>			 
             </ul>
         </div>
     
    
      
<ul>

</div>

</ul>

 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="surgary.jpg" style="width:100%" height=550px>
  <div class="tex">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="surgery-1807541 (1).jpg"style="width:100%" height=550px>
  <div class="tex">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="arji.jpg" style="width:100%" height=550px>
  <div class="tex">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="container">
        <div class="box">
            <div class="text">
             <a href="ind2.php">			
                <h1>Card One</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti eos ducimus a quos ipsa totam blanditiis maxime placeat veritatis dolore?</p>
                <button class="btn">Read</button>
				</a>
            </div>
        </div>
        <div class="box two">
		<a href="pin.php">
            <div class="text">
                <h1>Card Two</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti eos ducimus a quos ipsa totam blanditiis maxime placeat veritatis dolore?</p>
               <button class="btn btn-primary" type="submit" name="submit" onsubmit="myFunction()">Submit</button>
            </div>
			</a>
        </div>
        <div class="box three">
		<a href="ind.php">
            <div class="text">
                <h1>Card Three</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti eos ducimus a quos ipsa totam blanditiis maxime placeat veritatis dolore?</p>
                <button class="btn">Read</button>
            </div>
			</a>
        </div>
		 <div class="box four">
            <div class="text">
                <h1>Card Three</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti eos ducimus a quos ipsa totam blanditiis maxime placeat veritatis dolore?</p>
                <button class="btn">Read</button>
            </div>
			
        </div>
		
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
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14769.321653500756!2d73.19396090000001!3d22.265470299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1623693580169!5m2!1sen!2sin" width="1800" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<div class="footer">
<div class="row">
<div class="footer-col-1">
<h3>download our app</h3>
<p>downlode App for Androud and ios mobile phone.</p>
<div class="app-logo">
<img src="766286b8-a1f0-4e7a-9327-cf0181a544ca.jpg">
<img src="27300bc6-5442-4eb5-b53d-b85c0ce13d2c.jpg">
</div>
</div>
<div class="footer-col-3">
<h3>useful links</h3>
<ul>
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
<p class="you">Physical fitness is the first requisite of happiness</p>
</div>

<script>
    <script>
        function myFunction(){
           var x = document.getElementById("menu"); 
            
            if(x.style.display == "block")
            {
                x.style.display = "none";
            }
            else{
                x.style.display = "block";
            }
        }
    </script>
</script>
</body>
</html>