<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';

try {
    $name = strip_tags($_POST['name']);
    $email = strip_tags ($_POST['email']);
    $msg = strip_tags ($_POST['message']);

    $subject = "Contact Form from Ghazilla Website";

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "smtp.gmail.com"; // SMTP server example
    //$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 587;
    $mail->SMTPSecure = 'tls';                    // set the SMTP port for the GMAIL server
    $mail->Username   = "farizjr12@gmail.com"; // SMTP account username example
    $mail->Password   = "Guegajahbukitperma1";        // SMTP account password example

    $mail->From = $email;
    $mail->FromName = $name;

    $mail->AddAddress('info@example.com', 'Information'); 
    $mail->AddReplyTo($email);

    $mail->IsHTML(true);

    $mail->Subject = $subject;

    $mail->Body    =  $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->Send();
    echo "<head> <link href='css/animate.css' rel='stylesheet'> <link href='css/style.css' rel='stylesheet'> <link href='css/bootstrap.css' rel='stylesheet'></head>
    <h2 class='message-success mt-5 text-center animated tada'>Message Submitted!</h3>
    <script>setTimeout(\"location.href = 'contact.php';\",3000);</script>";

    exit;

} catch (phpmailerException $e) {
    echo "<head> <link href='css/animate.css' rel='stylesheet'> <link href='css/style.css' rel='stylesheet'> <link href='css/bootstrap.css' rel='stylesheet'></head>
    <h2 class='message-success mt-5 text-center animated tada'>Message could not been sent</h3>
    <script>setTimeout(\"location.href = 'contact.php';\",5000);</script>", $mail->ErrorInfo;$e->errorMessage(); //error messages from PHPMailer
} catch (Exception $e) {
    echo "<head> <link href='css/animate.css' rel='stylesheet'> <link href='css/style.css' rel='stylesheet'> <link href='css/bootstrap.css' rel='stylesheet'></head>
    <h2 class='message-success mt-5 text-center animated tada'>Message could not been sent</h3>
    <script>setTimeout(\"location.href = 'contact.php';\",5000);</script>", $mail->ErrorInfo;$e->getMessage();
}
?>