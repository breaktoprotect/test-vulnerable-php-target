<?php
require_once 'vendor/autoload.php';

if (isset($_POST['email'])) {
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->setFrom('sender@example.com', 'Sender Name');
    $mail->addAddress($_POST['email']);
    $mail->Subject = 'Subject';
    $mail->Body = 'Body';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>