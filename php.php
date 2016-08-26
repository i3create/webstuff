<?php
if($_POST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$subject = $_POST['subject'];	
	$message = $_POST['message'];
	
	


	$info = "EMAIL=" . $email . "\n" . "NAME=" . $name . "\n" . "PHONE=" . $phone . "\n" . "COMPANY=" . $company . "\n" .  "SUBJECT=" . $subject . "\n" . "MESSAGE=" . $message;

	//Do whatever php code here that makes you happy.   
	mail('chikere@gmail.com', 'Message from i3create Web site', $info);
	header("location: http://i3create.com");
}	

?>

