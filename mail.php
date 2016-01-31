<?php

$adminEmail = 'testmail@testmail.ru';

echo
    htmlspecialchars($_POST['name']) . "\r\n" .
    htmlspecialchars($_POST['email']) . "\r\n" .
    htmlspecialchars($_POST['address']);
$to      = 'timohin.i@gmail.com';
$subject = 'Психоанализ в С-Пб - Новая заявка с сайта';
$message =
    htmlspecialchars($_POST['name']) . "\r\n" .
    htmlspecialchars($_POST['email']) . "\r\n" .
    htmlspecialchars($_POST['address']);
$message = wordwrap($message, 70, "\r\n");
$headers = 'From:' . $adminEmail . "\r\n" .
    'Reply-To:' . $adminEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if  (mail($to, $subject, $message, $headers)) {
    echo '<br/>' . 'Send';
} else {
    echo 'Sending error';
};
header("Location: ".$_SERVER['HTTP_REFERER']);