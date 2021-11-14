<?php
    $myAwardSpaceEmail = "your-AwardSpace-email-goes-here";
    $myPersonalEmail = "your-personal-email-goes-here";
    
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message was sent successfully!';
        mail($myPersonalEmail, $message, $headers);
    } else {
        echo 'An error has occurred!';
    }
?>