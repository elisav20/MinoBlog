<?php
    $name = trim(filter_var($_POST['contact-name'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['contact-email'], FILTER_SANITIZE_EMAIL));
    $subject = trim(filter_var($_POST['contact-subject'], FILTER_SANITIZE_STRING));
    $message = trim(filter_var($_POST['contact-message'], FILTER_SANITIZE_STRING));

    $error = '';
    if (strlen($name) <= 3)
        $error = 'The Name must be more than three characters';
    else if (strlen($email) <= 3)
        $error = 'Incorrect Email adress';
    else if (strlen($subject) <= 3)
        $error = 'The Subject must be more than three characters';
    else if (strlen($message) <= 3)
        $error = 'The Message must be more than three characters';

    if ($error != '') {
        echo $error;
        exit(); 
    }

    $my_email = "testmino87@gmail.com";
    $sub = "=?utf-8?B?".base64_encode("$subject")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";

    mail($my_email, $sub, $message, $headers);

    echo 'SUCCESS';
?>