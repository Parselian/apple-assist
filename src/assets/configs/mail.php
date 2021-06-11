<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$to = 'parselian.study@yandex.ru';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта laptop-power.ru";
$from = array('Laptop Power', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
