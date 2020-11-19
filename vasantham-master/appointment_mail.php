<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include("../backend/admin/config.php");
?>





<?php
$error = '';
$name = '';
$email = '';
$phone = '';
$departments = '';
$date = '';
$time = '';
$message = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
    } else {
        $name = clean_text($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }
    }
    if (empty($_POST["email"])) {
        $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
    } else {
        $email = clean_text($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= '<p><label class="text-danger">Invalid email format</label></p>';
        }
    }
    if (empty($_POST["phone"])) {
        $error .= '<p><label class="text-danger">Phone number is required</label></p>';
    } else {
        $phone = clean_text($_POST["phone"]);
    }
    if (empty($_POST["departments"])) {
        $error .= '<p><label class="text-danger">Department is required</label></p>';
    } else {
        $departments = clean_text($_POST["message"]);
    }
    if (empty($_POST["date"])) {
        $error .= '<p><label class="text-danger">Date is required</label></p>';
    } else {
        $date = clean_text($_POST["message"]);
    }
    if (empty($_POST["time"])) {
        $error .= '<p><label class="text-danger">Time is required</label></p>';
    } else {
        $time = clean_text($_POST["time"]);
    }
    if (empty($_POST["message"])) {
        $error .= '<p><label class="text-danger">Message is required</label></p>';
    } else {
        $message = clean_text($_POST["message"]);
    }
    if ($error == '') {
        /*
        $statement = $pdo->prepare("SELECT * FROM appointment");
    	$statement->execute(array($_POST['category_name']));
    	$total = $statement->rowCount();
    	if($total)
    	{
    		$valid = 0;
        	$error_message .= "Category Name already exists<br>";
        }
        */
        $statement = $pdo->prepare("INSERT INTO appointment (patient_name,patient_email,patient_phone,department,schedule_date,schedule_time,message) VALUES (?,?,?,?,?,?,?)");
        $statement->execute(array($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['departments'],$_POST['date'],$_POST['time'],$_POST['message']));

        /*try {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
            $mail->Port = 587; // TLS only
            $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS; // ssl is depracated
            $mail->SMTPAuth = true;
            $mail->Username = 'office.vasanthamhealthcentre@gmail.com';
            $mail->Password = 'vasantham@2020';
            $mail->setFrom($_POST["email"], $_POST["name"]);
            $mail->AddAddress('office.vasanthamhealthcentre@gmail.com', 'Vasantham Healthcentre');        //Adds a "To" address
            // $mail->AddCC($_POST["email"], $_POST["name"]);    //Adds a "Cc" address
            $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
            $mail->Subject = 'Booking an Appointment';
            $current_date = date("M d,Y");
            // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->msgHTML('<p style="font-size: 12px;text-align: left;"  >! Your Appointment has been registered, thanks!</p>');
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

            $mail->send();

            echo "after mail".$_POST["email"].$_POST["name"].$_POST["message"].$_POST["phone"];
            // $mail->Body = $_POST["message"];                //An HTML or plain text message body
            if ($mail->Send())                                //Send an Email. Return true on success or false on error
            {
                $error = '<label class="text-success">Thank you for contacting us</label>';
            } else {
                $error = '<label class="text-danger">There is an Error</label>';
            }

            $name = '';
            $email = '';
            $phone = '';
            $departments = '';
            $date = '';
            $time = '';
            $message = '';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }*/
    }
    header('location: index.php');
}


?>