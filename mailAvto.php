<?php 

$recepient = "vov.cazackow@yandex.ru";
$sitename = "Пескоструй";

$manufacturer = trim($_POST["manufacturer"]);
$mark = trim($_POST["mark"]);
$body = trim($_POST["body"]);
$yers = trim($_POST["yers"]);
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \n Email: $email \n Производитель: $manufacturer \n марка: $mark \n кузов: $body \n год: $yers";

$pagetitle = "Новая заявка с сайта \"$sitename\"";

mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");


?>