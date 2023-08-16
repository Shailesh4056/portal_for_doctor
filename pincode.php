<html>
<head>
<style>
.textbox{
	margin-top:2px;
	margin-bottom:20px;
	background-color:inherit;
	padding:10px;
	border:1px solid #000;
	border-radius:5px;
	width:20%;
	margin-left:10%;
	margin-right:10%;
	color:#000;
}
.input-box-1 input,.input-box-2 input{
	margin-top:2px;
	margin-bottom:20px;
	padding:10px;
	border:1px solid #000;
	border-radius:5px;
	width:30%;
	margin-left:10%;
	margin-right:10%;
	color:#000;
}
.btn{
	background-color:FF0000;
}
</style>
</head>
<body>
<form method="post" action="" style="text-align:center">
<div class="pin">
<input type="text" name="pincode" id="pincode" class="textbox" placeholder="Pincode">
<input type="button" class="btn" value="get Details" onclick="get_details">
<div class="input-box-1">
<input type="text" name="city" disabled placeholder="city">
</div>
<div class="input-box-2">
<input type="text" name="state" disabled placeholder="State">
</div>
</form>
</div>
<script>
function get_details(){
	var pincode=jQuery('#pincode').val();
	if(pincode==''){
		jQuery('#city').val('');
		jQuery('#state').val('');
	}
	else{
		jQuery.ajax({
			url:'pin.php',
			type:'post',
			data:'pincode='+pincode,
			success:function(data){
				console.log(data);
			}
		})
	}
}
</script>
</body>
</html>
