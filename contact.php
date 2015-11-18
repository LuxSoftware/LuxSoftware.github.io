<?php

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$type = $_GET['type'];
$title = $_GET['title'];
$message = $_GET['message'];

$to = 'luxsoftwareofficial@gmail.com';
$subject = $type . ": $title";
$message = $message;
$headers = "From: $email" . "\r\n" .
			"Reply-To: $email" . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>