<?php
$to = 'george.ramirez@icloud.com';
$subject = 'Test mail';
$message = 'Hello! This is a simple test email message.';
$from = 'twerking@hotmail.com';
$headers = 'From:' . $from;
mail($to,$subject,$message,$headers);
echo 'Mail Sent.';
?>