<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
	
require('sendgrid-php/sendgrid-php.php'); 



// get the posted data
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$phone = $_POST['contact_phone'];
$message = $_POST['contact_message'];


// write the email content
$email_content = "Name: $name<br>\n";
$email_content .= "Email Address: $email_address<br>\n";
$email_content .= "Phone: $phone<br>\n";


$email_content .= "Message:<br><br>\n\n$message";
	
$sendgrid = new SendGrid('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');
var_dump($sendgrid);
$email = new SendGrid\Email();

$email
    ->addTo('kreuger.k@gmail.com')
    ->setFrom($email_address)
    ->setSubject('Contact formulier')
    ->setHtml($email_content);

$res = $sendgrid->send($email);

echo json_encode($res);

