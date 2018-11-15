<?php

include_once('../connection.php');
include_once('EmailResults1.php');
	# code...

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Form Data
$file = $_REQUEST['file'] ;
$recipient = $_REQUEST['recipient'] ;
$subject = $_REQUEST['subject'];
//$message = $_REQUEST['message'] ;
// $mailbody = 'File: ' . $file . '' . PHP_EOL .
//             'Recipient: ' . $recipient . '' . PHP_EOL .
//             'Subject:' . $subject . '' . PHP_EOL;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'questphil.it@gmail.com';                 // SMTP username
    $mail->Password = 'questphil2012';                           // SMTP password
    $mail->SMTPSecure = 'tls';                       // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Kenjie Tiglao');
    $mail->addAddress($_POST['recipient']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    $file_name = $_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
    $mail->addAttachment($file_name);         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = "This is the result, see the attachments.";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;

    }else{
        echo 'Message has been sent.';
    }
    

?>