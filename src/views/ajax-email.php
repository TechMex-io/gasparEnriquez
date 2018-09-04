<?php
$to = 'george.ramirez2@gmail.com, drinhorchata@gmail.com';
$subject = 'Test mail';
$message = 'Hello! This is a simple test email message.';
$from = 'twerking@hotmail.com';
$headers = 'From:' . $from;
mail($to,$subject,$message,$headers);
echo 'Mail Sent.';
?>