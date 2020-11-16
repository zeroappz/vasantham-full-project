<?php
$error = '';
$name = '';
$email = '';
$phone = '';
$departments='';
$date='';
$time='';
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
    if (empty($_POST["departments"])){
        $error .= '<p><label class="text-danger">Department is required</label></p>';
    } else {
        $departments = clean_text($_POST["message"]);
    }
    if (empty($_POST["date"])){
        $error .= '<p><label class="text-danger">Date is required</label></p>';
    } else {
        $date = clean_text($_POST["message"]);
    }
    if (empty($_POST["time"])){
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
        require 'class/class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages						//Sets Mailer to send message using SMTP
        $mail->Host = 'mail.zeroclientglobal.com';        //Sets the SMTP hosts of your Email hosting, eg: mail.xxxxxx.com
        $mail->Port = 465;                                //Sets the default SMTP server port
        $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = 'info@zeroappz.com';                    //Sets SMTP username eg: info@zeroappz.com
        $mail->Password = '@WpCiofocnftp1#INF';                    //Sets SMTP password eg: xxxxxx
        $mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = $_POST["email"];                    //Sets the From email address for the message
        $mail->FromName = $_POST["name"];                //Sets the From name of the message
        $mail->AddAddress('info@zeroappz.com', 'ZeroAppz');        //Adds a "To" address
        $mail->AddCC($_POST["email"], $_POST["name"]);    //Adds a "Cc" address
        $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);                           //Sets message type to HTML				
        $mail->Subject = "Booking an Appointment";                //Sets the Subject of the message
        
        $body="";

        $body .= 'Mr/Ms. '.$name. ' is trying to reach you with the following message.';
        $body .=  "<br><h3>".$message."</h3>".' and his/her contact number is '."<strong>+91 ".$phone."</strong>";
        
    
        $mail->Body = $body;
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
        $departments='';
        $date='';
        $time='';
        $message = '';
    }
}

?>