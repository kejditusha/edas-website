<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$hour = $_POST['hour'];

$to = 'kejditusha02@gmail.com';
$subject = 'Appointment Request from Eda Nails';
$message = "Emri: $name\nNumer tel: $phone\nOrari: $hour";

$headers = "From: kejditusha02@gmail.com";
mail($to, $subject, $message, $headers);

header('Location: thank-you.html');
exit;
?>

