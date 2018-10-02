<?php

/* SETTINGS */

/* $yourEmail = "genriq4709@sbcglobal.net, genriq4708@gmail.com, george.ramirez@icloud.com"; */

/* $yourEmail = "gaspar@tech-mex.io, george.ramirez@icloud.com, genriq4709@sbcglobal.net, genriq4708@gmail.com, george@georgeramirezphotography.com, george.ramirez2@gmail.com, drinkhorchata@gmail.com"; */

$recipient = "gaspar@gasparenriquez.com";
$subject = "New Message from the website";

if($_POST){

  /* DATA FROM HTML FORM */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  /** Subject */
    $emailSubject = $subject . " from " . $name;

  /* HEADERS */
  $headers = "From: $recipient" . 
            /*"From: $name <$email>\r\n" .*/
            /* "Reply-To: $name <$email>\r\n" . */
             "Reply-To: $recipient\r\n" . 
             "Subject: $emailSubject\r\n" .
             "Content-type: text/plain; charset=UTF-8\r\n" .
             "MIME-Version: 1.0\r\n" . 
             "X-Mailer: PHP/" . phpversion() . "\r\n";
 
  /* PREVENT EMAIL INJECTION */
  if ( preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email) ) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die("500 Internal Server Error");
  }

  /* MESSAGE TEMPLATE */
  $mailBody = "Name: $name \n\r" .
              "To reply Click:  $email \n\r" .
              "Subject:  $subject \n\r" .
              "Message: $message";

  /* SEND EMAIL */
  mail($recipient, $emailSubject, $mailBody, $headers);
}
?>