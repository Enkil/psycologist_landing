<?php

$adminEmail = 'testmail@testmail.ru';

$to      = 'timohin.i@gmail.com';
$subject = 'Психоанализ в С-Пб - Новая заявка с сайта';
$message =
    htmlspecialchars($_POST['name']) . "\r\n" .
    htmlspecialchars($_POST['phone']) . "\r\n" .
    htmlspecialchars($_POST['time-from']) . "\r\n" .
    htmlspecialchars($_POST['time-to']);

$message = wordwrap($message, 70, "\r\n");

$headers = 'From:' . $adminEmail . "\r\n" .
    'Reply-To:' . $adminEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

//if  (mail($to, $subject, $message, $headers)) {
//    echo '<br/>' . 'Send';
//} else {
//    echo 'Sending error';
//};

header("Location: ".$_SERVER['HTTP_REFERER']);
?>