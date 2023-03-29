<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "chandler.eric.rose@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($to, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}

?>


# This code receives form input from a user and sends it to the email address specified in the $to variable. You will need to replace your_email@example.com with your own email address. Once a message has been successfully sent, the user will be redirected to the contact.php page with the parameter ?mailsend added to the URL, which you can use to display a success message to the user.
