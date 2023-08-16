<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form  method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group first_box">
            <input type="text" id="email" class="form-control" placeholder="Email" required="required">			<span id="email_error" class="field_error"></span>
        </div>
        <div class="form-group first_box">
            <input type="submit" class="btn btn-primary btn-block" value="Send OTP" onclick="send_otp()"></button>
        </div>
        <div class="form-group second_box">
            <input type="text" id="otp" class="form-control" placeholder="OTP" required="required">			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="button" class="btn btn-primary btn-block" onclick="submit_otp()">Submit OTP</button>
        </div>       
    </form>
</div><script>function send_otp(){
	 var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type == "submit") {
                    inputs[i].disabled = true;
                }
            }
				var email=jQuery('#email').val();	jQuery.ajax({		url:'send_otp.php',		type:'post',		data:'email='+email,		success:function(result){			if(result=='yes'){				jQuery('.second_box').show();				jQuery('.first_box').hide();			}			if(result=='not_exist'){
				jQuery('#email_error').html('Please enter valid email');
			}		}	});}function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'check_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='covi.php'
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid otp');
			}
		}
	});
        var msg = document.getElementById('msg');
        msg.innerHTML = 'Data submitted and the button disabled &#9786;';
}</script><style>.second_box{display:none;}.field_error{color:red;}</style>
</body>
</html>                                		                            