<?php

/*
 *setup errors display
 */

define('DEBUG', true);
error_reporting(E_ALL);

if (DEBUG) {
    ini_set('display_errors', 'On');        
} else {
    ini_set('display_errors', 'Off');
}

/*
 *Email setup
 */

$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Allman@example.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to



