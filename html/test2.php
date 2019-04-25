<?php
$to = "shivangsarat@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: shivang.169105179@muj.manipal.edu" . "\r\n" .

$success = mail($to,$subject,$txt,$headers);

if ($success) {
	# code...
	echo "Mail sent";
}
else {
	# code...
	echo "Mail lost";
}
?>