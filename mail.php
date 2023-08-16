
<?php
	$to="shailesh2003tg@gmail.com";
	$subject="otp";
   	$body="wdfsfd";
	$headers="From:uttamgoswamis35@gmail.com";
if (mail($to, $subject, $body, $headers)) {
    return 0;
} else {
    return 1;
}
?>