<html>
<body>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
body{
    margin-top:20px;
    background:#dcdcdc;
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}
.search-result-box .tab-content {
    padding: 30px 30px 10px 30px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -moz-box-shadow: none
}

.search-result-box .search-item {
    padding-bottom: 20px;
    border-bottom: 1px solid #e3eaef;
    margin-bottom: 20px
}
.text-success {
    color: #0acf97!important;
}
a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
.btn-custom {
    background-color: #02c0ce;
    border-color: #02c0ce;
}

.btn-custom, .btn-danger, .btn-info, .btn-inverse, .btn-pink, .btn-primary, .btn-purple, .btn-success, .btn-warning {
    color: #fff!important;
}
</style>
</head>
<form action="sunil.php" method="post">
<div class="table-responsive">
<div class="search">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-result-box card-box">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="pt-3 pb-4">
                                <div class="input-group">
                                    <input type="text" id="" name="id" class="form-control" value="">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn waves-effect waves-light btn-custom"><i class="fa fa-search mr-1"></i> Search</button>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <h4>Search Results For </h4></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <ul class="nav nav-tabs tabs-bordered">
                        <li class="nav-item"><a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">Note</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="search-item">
                                        <h4 class="mb-1"><a href="#">Note</a></h4>
                                        <div class="font-13 text-success mb-3">Note</div>
                                        <p class="mb-0 text-muted">One registration per person is sufficient. Please do not register with multiple mobile numbers or different Photo ID Proofs for same individual.
Scheduling of Second dose should be done from the same account (same mobile number) from which the first dose has been taken, for generation of final certificate. Separate registration for second dose is not necessary.
Please carry the registered mobile phone and the requisite documents, including appointment slip, the Photo ID card used for registration, Employment Certificate (HCW/FLW) etc., while visiting the vaccination center, for verification at the time of vaccination.
Please check for additional eligibility conditions, if any, prescribed by the respective State/UT Government for vaccination at Government Vaccination Centers, for 18-44 age group, and carry the other prescribed documents (e.g. Comorbidity Certificate etc.) as suggested by respective State/UT (on their website).
The slots availability is displayed in the search (on district, pincode or map) based on the schedule populated by the DIOs (for Government Vaccination Centers) and private hospitals for their vaccination centers.
The vaccination schedule published by DIOs and private hospitals displays the list of vaccination centers with the following information
The vaccine type.
The age group (18-44/45+ etc.).
The number of slots available for dose 1 and dose 2.
Whether the service is Free or Paid (Vaccination is free of cost at all the Government Vaccination Centers).
Per dose price charged by a private hospital.
If you are seeking 1st dose vaccination, the system will show you only the available slots for dose 1. Similarly, if you are due for 2nd dose, the system will show you the available slots for dose 2 after the minimum period from the date of 1st dose vaccination has elapsed.
Once a session has been published by the DIO/ private hospital, the session now can not be cancelled. However, the session may be rescheduled. In case you have booked an appointment in any such vaccination session that is rescheduled for any reason, your appointment will also be automatically rescheduled accordingly. You will receive a confirmation SMS in this regard. On such rescheduling, you would still have the option of cancelling or further rescheduling such appointment.
When deleting any member from your account, please note they will lose access to their online vaccination certificate.</p>
                                    </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end Users tab -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
</div>
</form>
</body>
</html>