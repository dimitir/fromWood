<?php
header("Content-Type: text/html; charset=utf-8");
if (isset ($_POST['DataMessages'])) {
    $DataMessages = $_POST['DataMessages'];
    if ($DataMessages == '') {
        unset($DataMessages);
    }
}


$DataMessages = json_decode($DataMessages, true);
//var_dump($DataMessages);

$phone = $DataMessages['phone'];
$message = 'Телефон: ' . $DataMessages['phone'] . ' 
Почта: ' . $DataMessages['mail'] . '
Сообщение: ' . $DataMessages['comment'] . ' ';
$headers = 'From: dobrodel@fromwood.com.ua';

mail('fromwood4@gmail.com', 'From Wood', $message, $headers);

