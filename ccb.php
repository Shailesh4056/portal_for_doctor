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
<style>
body{
    margin-top:20px;
    background:#eee;
}
/* My Account */
.payments-item img.mr-3 {
    width: 47px;
}
.order-list .btn {
    border-radius: 2px;
    min-width: 121px;
    font-size: 13px;
    padding: 7px 0 7px 0;
}
.osahan-account-page-left .nav-link {
    padding: 18px 20px;
    border: none;
    font-weight: 600;
    color: #535665;
}
.osahan-account-page-left .nav-link i {
    width: 28px;
    height: 28px;
    background: #535665;
    display: inline-block;
    text-align: center;
    line-height: 29px;
    font-size: 15px;
    border-radius: 50px;
    margin: 0 7px 0 0px;
    color: #fff;
}
.osahan-account-page-left .nav-link.active {
    background: #f3f7f8;
    color: #282c3f !important;
}
.osahan-account-page-left .nav-link.active i {
    background: #282c3f !important;
}
.osahan-user-media img {
    width: 90px;
}
.card offer-card h5.card-title {
    border: 2px dotted #000;
}
.card.offer-card h5 {
    border: 1px dotted #daceb7;
    display: inline-table;
    color: #17a2b8;
    margin: 0 0 19px 0;
    font-size: 15px;
    padding: 6px 10px 6px 6px;
    border-radius: 2px;
    background: #fffae6;
    position: relative;
}
.card.offer-card h5 img {
    height: 22px;
    object-fit: cover;
    width: 22px;
    margin: 0 8px 0 0;
    border-radius: 2px;
}
.card.offer-card h5:after {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-bottom: 4px solid #daceb7;
    content: "";
    left: 30px;
    position: absolute;
    bottom: 0;
}
.card.offer-card h5:before {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #daceb7;
    content: "";
    left: 30px;
    position: absolute;
    top: 0;
}
.payments-item .media {
    align-items: center;
}
.payments-item .media img {
    margin: 0 40px 0 11px !important;
}
.reviews-members .media .mr-3 {
    width: 56px;
    height: 56px;
    object-fit: cover;
}
.order-list img.mr-4 {
    width: 70px;
    height: 70px;
    object-fit: cover;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
    border-radius: 2px;
}
.osahan-cart-item p.text-gray.float-right {
    margin: 3px 0 0 0;
    font-size: 12px;
}
.osahan-cart-item .food-item {
    vertical-align: bottom;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #000000;
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.rounded-pill {
    border-radius: 50rem!important;
}
a:hover{
    text-decoration:none;
}
</style>
</head>
<body>
				     
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">
<div class="container">
    <div style="display: flex;
    margin-right: -15px;
    margin-left: -15px;">
        <div class="col-md-10">
<?php

$con = mysqli_connect('localhost','root');
   $db= mysqli_select_db($con,'sem_5admin');
		  
 if(isset($_POST['search']))
 {
	 $pincode=$_POST['pincode'];
			  
$display= "SELECT `id`, `Hospital`, `Doctor`, `Pincode`, `Address`, `email`, `Phone`, `type` FROM `hospitals` WHERE pincode='$pincode'";
		$result=mysqli_query($con,$display);	
while($sult=mysqli_fetch_array($result)){
?>

        <div class="col-md-9" style="max-width: 100%;">
            <div class="osahan-account-page-right shadow-sm bg-white">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                       <center> <h4 class="font-weight-bold mt-0 mb-4">Physical Appointment Booking Details</h4></center>
                        <div class="bg-white card mb-4 order-list shadow-sm">
                            <div class="gold-members p-4">
                                <a href="#">
                                </a>
                                <div class="media">
                                    <a href="#">
                                        <img class="mr-4" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                                                                <h6 class="mb-2">
										<p class="mb-1">ID:
                                            <a href="#" class="text-black"><?php echo $sult['id'];?></a></p>
                                        </h6>
										                                        <h6 class="mb-2">
										<p class="mb-1">Hospital:
                                            <a href="#" class="text-black"><?php echo $sult ['Hospital'];?></a></p>
                                        </h6>
										                                        <h6 class="mb-2">
										<p class="mb-1">Doctor:
                                            <a href="#" class="text-black"><?php echo $sult ['Doctor'];?></a></p>
                                        </h6>
                                        <div class="float-right">
                                            <a class="btn btn-sm btn-primary" href="appor1.php?id=<?php echo $sult['id']; ?>"><i class="icofont-refresh"></i> Book Appointment</a>
                                        </div>										
										                                        <h6 class="mb-2">
										<p class="mb-1">Address:
                                            <a href="#" class="text-black"><?php echo $sult ['Address'];?></a></p>
                                        </h6>
										                                        <h6 class="mb-2">
										<p class="mb-1">Pincode:
                                            <a href="#" class="text-black"><?php echo $sult ['Pincode'];?></a></p>
                                        </h6>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                       <?php
}
 }
?>
</div>
    </div>
</div>

<body>
</html>