<?php
var_dump($_POST);
// Récupération des données du formulaire
$nom = $_POST['name'];
$email = $_POST['senderEmail'];
$message = $_POST['mailMessage'];

// Paramètres SMTP
$smtpHost = 'smtp.gmail.com';  // Serveur SMTP de Gmail
$smtpPort = 587;  // Port SMTP de Gmail
$smtpUsername = 'stanislasgerardin.test@gmail.com';  // Adresse email Gmail
$smtpPassword = 'Irvine99';  // Mot de passe Gmail
$smtpEncryption = 'tls';  // Type de chiffrement à utiliser pour la connexion SMTP

// Destinataire de l'email
$to = 'stanislasgerardin.test@gmail.com';

// Sujet et corps de l'email
$subject = 'Nouveau message de '.$nom;
$body = 'De: '.$nom.' ('.$email.')'.PHP_EOL.PHP_EOL.$message;

// Configuration de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = $smtpEncryption;
    $mail->Port = $smtpPort;

    // Destinataire, sujet et corps du message
    $mail->setFrom($smtpUsername, 'Mon site web');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Envoi du message
    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo 'Le message n\'a pas pu être envoyé. Erreur: ', $mail->ErrorInfo;
}
