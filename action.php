<?php
$email = $_POST['email'];
// require_once('PHPMailer_5.2.0/class.phpmailer.php');
// $mail = new PHPMailer(); // create a new object
// $mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
// $mail->SMTPAuth = true; // authentication enabled
// $mail->SMTPOptions = array(
//     'ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => true
//     )
// );
// $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
// $mail->Host = "smtp.gmail.com";
// $mail->Port = 465; // or 587
// $mail->IsHTML(true);
// $mail->Username = "theoriginalmk7@gmail.com";
// $mail->Password = "etsH7BPvtXmkVgb";
// $mail->SetFrom("singh99sahil.gs@gmail.com");
// $mail->Subject = "Welcome to IIT PATNA Guest House Booking Portal";
// $mail->Body = "Hi ,<br><br>";
// $mail->AddAddress($email);
//
//  if(!$mail->Send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
//  }
 ?>

 <?php
 // Import PHPMailer classes into the global namespace
 // These must be at the top of your script, not inside a function
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require_once('PHPMailer-6.0.7/src/PHPMailer.php');
 require_once('PHPMailer-6.0.7/src/Exception.php');
 require_once('PHPMailer-6.0.7/src/OAuth.php');
 require_once('PHPMailer-6.0.7/src/SMTP.php');


 // Load Composer's autoloader
 require 'C:\xampp\phpMyAdmin\vendor\autoload.php';

 // Instantiation and passing `true` enables exceptions
 $mail = new PHPMailer(true);

 try {
     //Server settings
     $mail->SMTPDebug = 4;                                       // Enable verbose debug output
     $mail->isSMTP();                                            // Set mailer to use SMTP
     $mail->Host       = "smtp.gmail.com";  // Specify main and backup SMTP servers
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = "theoriginalmk7@gmail.com";                     // SMTP username
     $mail->Password   = "uqmftsMfU9ustcw";                               // SMTP password
     $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to
     $mail->SetFrom("singh99sahil.gs@gmail.com");

     //Recipients
     // $mail->setFrom('from@example.com', 'Mailer');
     $mail->AddAddress($email);
     // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
     // $mail->addAddress('ellen@example.com');               // Name is optional
     // $mail->addReplyTo('info@example.com', 'Information');
     // $mail->addCC('cc@example.com');
     // $mail->addBCC('bcc@example.com');

     // Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

     // Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = 'Here is the subject';
     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
