<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'ellajuengst@gmail.com';
    $email_subject = "New form submission from website!";
    $email_body = "User name: $name.\n".
                    "User email: $visitor_email.\n".
                        "User message: $message.\n";

    $to = 'ellaj@live.unc.edu';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";
    
    
    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Locatin: about.html");



?>