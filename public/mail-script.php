<?php

    $myAwardSpaceEmail = "contact@guillaumenaval.fr";
    $myPersonalEmail = "navalguillaume@gmail.com";
    
    if(isset($_POST['submit'])) {
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = "Message de " . $name . " <" . $email .">" . "\r\n";
        $headers = "From: " . $name . "<" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message was sent successfully!';
        mail($myPersonalEmail, $subject, $message, $headers);
        header("Location: index.html");
    } else {
        echo 'An error has occurred!';
    }
?>