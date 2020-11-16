<?php
if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$phone = strip_tags($_POST['phone']);
	$department = strip_tags($_POST['departments']);
	$time = strip_tags($_POST['time']);
	$date = strip_tags($_POST['date']);
	$message = strip_tags($_POST['message']);
	echo "<strong>Name</strong>: ".$name."</br>";
	echo "<strong>Email</strong>: ".$email."</br>";
	echo "<strong>phone</strong>: ".$phone."</br>";
	echo "<strong>department</strong>: ".$department."</br>";
	echo "<strong>time</strong>: ".$time."</br>";
	echo "<strong>date</strong>: ".$date."</br>";
	echo "<strong>Message</strong>: ".$message."</br>";
	echo "<span class='label label-info'>Contact form has been submitted with above details!</span>";	
}
?>