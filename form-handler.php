<?php

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'adamovicana01@gmail.com'; //gmail nalog
    $mail->Password = 'bbxjaoodhgsuwhzb'; //gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('adamovicana01@gmail.com');

    $mail->addAddress($_POST['email_adresa']);
    $mail->isHTML(true);
    $mail->Subject = $_POST['naslov'];
    $mail->Body = $_POST['poruka'];

    $mail->send();

    echo "
    <script> 
    alert('Mejl je poslat uspesno.');
    </script>";

    header("Location: kontakt.html");
}
