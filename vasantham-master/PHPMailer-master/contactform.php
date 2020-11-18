<?php

if(isset($_POST["firstname"]))
 {
	 $fname=$_POST["firstname"];
	 $lname=$_POST["lastname"];
	 $mobile=$_POST["phone"];
	 $email=$_POST["email"];
	 
	 $message=$_POST["message"];
 }
 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.yandex.ru"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 465; // TLS only
$mail->SMTPSecure = 'ssl'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'info@zeroclient.xyz';
$mail->Password = 'abcd@1234';
$mail->setFrom('info@zeroclient.xyz', $fname.' '.$lname);
$mail->addAddress('info@zeroclient.xyz', 'ZeroClient');
$mail->Subject = 'Mail from Website Register Form.';
$mail->msgHTML(" \r\n Mobile : ".$mobile."\r\n Email :".$email."\r\n Message : ".$message); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    //echo "Message sent!";
    echo '<script type="text/javascript">';
    echo 'window.location.href="http://zeroclient.xyz";';
    echo 'alert("Mail Successfully Submitted.");';
    echo '</script>';
    //header("Location: http://zeroclient.xyz"); /* Redirect browser */
    //exit();
}

?>