<?php

//var_dump($_POST);
//die;
include('smtp/class.phpmailer.php');

$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->IsSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "joao.vagner@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "CHUPA MINHA SENHA SEUS CU";
//Set who the message is to be sent from
$mail->SetFrom($_POST['email'], $_POST['nome']);
//Set an alternative reply-to address
//Set who the message is to be sent to
$mail->AddAddress('joao.vagner@gmail.com', 'João Vagner B. Medeiros');
$mail->AddAddress('jnascimento@gmail.com', 'Jean Nascimento (Suissa)');
//Set the subject line
$mail->Subject = 'Contato pelo #SAMPAJS';
//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
$mail->MsgHTML("Email: {$_POST['email']} <br /> Nome: {$_POST['nome']} <br /> Mensagem: " . $_POST['message']);
//Replace the plain text body with one created manually
$mail->AltBody = '----';

//Send the message, check for errors
if (!$mail->Send()) {
    echo json_encode(array('error' => $mail->ErrorInfo));
} else {
    echo json_encode(array('success' => 'Obrigado por seu contato! Responderemos o mais breve possivel! :) '));
}
?>