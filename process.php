<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];
$message = $_REQUEST['message'];


try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.snproductionoffical.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'Digital@snproductionoffical.com';//change this                     // SMTP username
    $mail->Password   = 'Amit@2020';//change this                        // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('Digital@snproductionoffical.com');
    
	$mail->addAddress('snproduction.digital@gmail.com');     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Loan Enquiry Details';
    $mail->Body    = '<p>Name:'.$name.'</p><p>Mobile Number:'.$phone.'</p><p>Email:'.$email.'</p><p>Required Message</p>'.$message.'</p>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 $mail->send();
    echo 'Thanks! Our Team will Contact you Soon! <meta http-equiv="refresh" content="0;url=https://snproductionoffical.com/Digital-Marketing/" />';
    //header("Location: thankyou.php");
   //echo "<a href=index.html>Thanks! Our Team will Contact you Soon!</a></center>";
   //echo "Thanks! Our Team will Contact you Soon!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("location: index.html");
?>