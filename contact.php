<?php

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myEmail = "emmanuelpeitlo19@gmail.com"; // cant send because we are using local host
    $header = "From: " . $email;
    $message2 = "You have revieve a message from" . $name . ". \n\n" . $message;

    // 1. E-mail your sending it to
    // 2. Subject
    // 3. Is the message

    mail($myEmail, $subject, $message2, $header);

}

?>