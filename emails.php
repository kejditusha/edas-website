<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];

    // send email
    $to = 'kejditusha02@gmail.com';
    $subject = 'New Appointment Booking';
    $message = "Name: $name\nPhone Number: $phone\nPreferred Time: $time";
    $headers = 'From: Eda Nails <no-reply@edanails.com>' . "\r\n" .
        'Reply-To: no-reply@edanails.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Appointment booked successfully. We will contact you shortly to confirm.';
    } else {
        echo 'There was an error booking your appointment. Please try again later.';
    }
}

?>

