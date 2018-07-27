<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once('class.phpmailer.php');

require_once('class.smtp.php');

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

/*$errorMSG = "";
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";*/

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'farizjr12@gmail.com';                 // SMTP username
    $mail->Password = 'Guegajahbukitperma1';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('farizjr12@gmail.com');
    $mail->addAddress('info@gudangarloji.ga');     // Add a recipient

    $body = "<p><strong>hello</strong>";

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = $body;
    //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<head> <link href='css/animate.css' rel='stylesheet'> <link href='css/style.css' rel='stylesheet'> <link href='css/bootstrap.css' rel='stylesheet'></head>
    <h2 class='message-success mt-5 text-center animated tada'>Message Submitted!</h3>
    <script>setTimeout(\"location.href = 'contact.php';\",3000);</script>";
} catch (Exception $e) {
    echo "<head> <link href='css/animate.css' rel='stylesheet'> <link href='css/style.css' rel='stylesheet'> <link href='css/bootstrap.css' rel='stylesheet'></head>
    <h2 class='message-success mt-5 text-center animated tada'>Message could not been sent</h3>
    <script>setTimeout(\"location.href = 'contact.php';\",5000);</script>", $mail->ErrorInfo;
}

?>