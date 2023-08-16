<!DOCTYPE html>
 <?php
session_start();
?>
<html lang="en">
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
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
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
   
	<div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="BOOKING">BOOKING <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="covi.php" class="w3-bar-item w3-button">VACCINE BOOKING</a>
        <a href="blod.php" class="w3-bar-item w3-button">BLOOD DONATATION</a>
        <a href="organ donation1.php" class="w3-bar-item w3-button">ORGAN DONATION</a>
      </div>
    </div>
    
	<div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="APPOINTMENT">APPOINTMENT<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="pin.php" class="w3-bar-item w3-button">PHYSICAL APPOINTMENT</a>
        <a href="ind2.php" class="w3-bar-item w3-button">VIRTUAL APPOINTMENT</a>
       
      </div>
    </div>
	<a href="#Over services" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MEDIKIT</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
	<a href="#ABOUT" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
	<a href="logout.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></a>
<a href="pf.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">welcome, <?php echo $_SESSION ['email']; ?><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"style="fill:#ffffff !important;"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg></a>
    
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#Over Services" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BOOKING</a>
  <a href="#Over Services" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">APPOINTMENT</a>
  <a href="#Over Services" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MEDIKIT</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#ABOUT" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="17.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
       
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="16.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
         
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="13.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="ABOUT">
    <h2 class="w3-wide">ABOUT</h2>
    <p class="w3-opacity"><i>Health is the first step to prosperity</i></p>
    <p class="w3-justify">India has a vast health care system, but there remain many differences in quality between rural and urban areas as well as between public and private health care. Despite this, India is a popular destination for medical tourists, given the relatively low costs and high quality of its private hospitals. Health is the biggest wealth for a human being in his/her entire lifetime. One can survive without excess money but can't survive without good health. Health is something that we can't buy with money but we can take care of it and we can cure it when needed with the help of the money.</p>
	<p>Health Care System is virtual Healthcare that means online patient care. This system can reduce a lots of hassle in the rural areas specially in this pandemic. The purpose is to computerize the front office management  to develop system  which is user friendly simple, fast and cost-effective. It deals with the collection of patient’s information, diagnosis details etc. And there is small e-commerce site where users can purchase all supplies and equipment that is used in medical treatment.
</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>SHAILESH SHARMA</p>
        <img src="4.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>ARCHANA RAO</p>
        <img src="7.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>PRANAY SHARMA</p>
        <img src="8.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="Over Services">
    <div class="w3-container w3-content w3-padding-40" style="max-width:800px">
      <h2 class="w3-wide w3-center">Over Services</h2>
      <p class="w3-opacity w3-center"><i>Choose health, get wealth.</br>Life is useless without health care.Health is the key to success. </i></p><br>

      

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="18.jfif" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>covid-19 vaccine</b></p>
            <p class="w3-opacity"> Protect yourself and others</p>
            <p>You are eligible to get covid-19 vaccine, get ready.</p>
			<iframe width="200" height="150" src="https://www.youtube.com/embed/HlABLHZkd9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Book vaccine</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="5.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Blood Donation</b></p>
            <p class="w3-opacity">"Donate blood and get blessings"</p>
            <p>Sometimes money cannot save life but donated blood can.</p>
			<iframe width="200" height="141" src="https://www.youtube.com/embed/d4CEu4aAumM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Donate Blood</button>
          </div>
        </div>
		
        <div class="w3-third w3-margin-bottom">
          <img src="19.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Organ Donation</b></p>
            <p class="w3-opacity">"Donate organs, Be blessed."</p>
            <p>If You Don’T Make It To The Finish Line, Donate Your Organs.</p>
				<iframe width="200" height="150" src="https://www.youtube.com/embed/TsCcbVjUA-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'" >Donate Organ</button>
		
          </div>
        </div>
		<div class="w3-third w3-margin-bottom">
          <img src="6.jpg" alt="San Francisco" style="width:100%"  class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Appointment</b></p>
            <p class="w3-opacity">Make Appointment</p>
            <p>Regular check-ups can help find potential health issues before they become a problem.</p>
				<iframe width="200" height="150" src="https://www.youtube.com/embed/G07V0aOmWTI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'" >Make Appointment</button>
		
          </div>
        </div>
		<div class="w3-third w3-margin-bottom">
          <img src="1.jfif" alt="San Francisco" style="width:100%"  class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>MEDIKIT</b></p>
            <p class="w3-opacity">Medical shop</p>
            <p>A retail store where medicines and miscellaneous articles are sold : pharmacy.</p>
				<iframe width="200" height="130" src="https://www.youtube.com/embed/QMVKf8FzALk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'" >MEDIKIT</button>
		
          </div>
        </div>
		<div class="w3-third w3-margin-bottom">
          <img src="6.jfif" alt="San Francisco" style="width:100%"  class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>News</b></p>
            <p class="w3-opacity">Latest News</p>
            <p>News is information about current events.</p>
				<iframe width="200" height="175" src="https://www.youtube.com/embed/sf6jdLZcswg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'" >Latest News</button>
		
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Gujarat, INDIA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9827867212<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: healthcare.3153@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="contact.php" method="post" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input type="text" class="w3-input w3-border" name="name" placeholder="Name" required>
            </div>
            <div class="w3-half">
              <input type="text" class="w3-input w3-border" name="email" placeholder="Email" required>
            </div>
          </div>
          <input type="text" class="w3-input w3-border" name="massage" placeholder="Message" required>
        <button class="w3-button w3-black w3-section w3-right" type="submit" NAME="SEND">SEND</button></a>
        </form>
      </div>
    </div>
  </div>

<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">healthcare.3153</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;

carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>