<?php

$ime=$_POST['ime'];
$email_adresa=$_POST['email_adresa'];
$naslov=$_POST['naslov'];
$poruka=$_POST['poruka'];

$email_sajt='adamovicana01gmail.com';
$email_subject='Novi e-mail sa forme sajta';
$email_body="Ime korisnika: ".$ime."\n".
            "Email korisnika: ".$email_adresa."\n".
            "Naslov: ".$naslov."\n".
            "Poruka: ".$poruka."\n";   

$to='adamovicana01@gmail.com';
$headers="From: ".$email_sajt."\r\n";
$headers.="Reply-to: ".$email_adresa."\r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: kontakt.html");
