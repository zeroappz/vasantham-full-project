<?php
//index.php
ob_start();
session_start();
$error = '';
$name = '';
$email = '';
$phone = '';
$message = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


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
    if (empty($_POST["message"])) {
        $error .= '<p><label class="text-danger">Message is required</label></p>';
    } else {
        $message = clean_text($_POST["message"]);
    }
    if ($error == '') {
        try {
            $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'office.vasanthamhealthcentre@gmail.com';                     // SMTP username
            $mail->Password   = 'vasantham@2020';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;
            $mail->setFrom($_POST["email"], 'Vasantham HealthCentre');
            $mail->addAddress('office.vasanthamhealthcentre@gmail.com');     // Add a recipient
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->AddCC($_POST["email"], $_POST["name"]);    //Adds a "Cc" address
            $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
            $mail->Subject = 'Looking for an Appointment';
            $mail->Body    = '<h2>Dear Vasantham Hospital,</h2>
            <br><p>One Person approached us for the following information <strong>' . $message . ' </strong>and his/her name <strong>'. $name .  '</strong> and contact details are ' . '<strong>+91 ' . $phone . '</strong> and <strong>'. $email . '</strong></p> 
            <br/>
            <br>
            <b>AUTO RESPONSE CONTACT FORM</b>
            <h3>Vasantham Hospital</h3>';
            $mail->AltBody = 'Your query has been submitted to Vasantham HealthCentre!';
            //An HTML or plain text message body
            if ($mail->Send())                                //Send an Email. Return true on success or false on error
            {
                $error = '<label class="text-success">Thank you for contacting us</label>';
            } else {
                $error = '<label class="text-danger">There is an Error</label>';
            }
            $name = '';
            $email = '';
            $phone = '';
            $message = '';
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

?>