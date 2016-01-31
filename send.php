<?php
if ($_POST) {
    if(
        (isset($_POST['name'])&&$_POST['name']!="")
        &&(isset($_POST['phone'])&&$_POST['phone']!="")
//        &&(isset($_POST['time-from'])&&$_POST['time-from']!="")
//        &&(isset($_POST['time-to'])&&$_POST['time-to']!="")
    )
    {
        $name = htmlspecialchars($_POST["name"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $timeFrom = htmlspecialchars($_POST["time-from"]);
        $timeTo = htmlspecialchars($_POST["time-to"]);

        $to = 'timohin.i@gmail.com,krestina.tatjana@gmail.com';
        $subject = 'Психоанализ в С-Пб - Новая заявка с сайта';

        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: <strong>'.$_POST['name'].'</strong></p>
                        <p>Телефон: <strong>'.$_POST['phone'].'</strong></p>
                        <p>Удобное время для звонка <strong>с: '.$_POST['time-from'].' до: '.$_POST['time-to'].'</strong></p>
                    </body>
                </html>';

        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n";

        mail($to, $subject, $message, $headers);
    }
}