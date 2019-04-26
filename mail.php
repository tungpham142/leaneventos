<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $to = $_POST['email'];
    $subject = "Message";
    $message = "Hello world!";
    $headers = "From: webmaster@example.com" . "\r\n" .
                "CC: somebodyelse@example.com";

    mail($to,$subject,$message,$headers);
    echo "Mail Sent";
    echo "<BR>";
    echo "<a href='index.html'>Back to main page</a>";
}
?> 