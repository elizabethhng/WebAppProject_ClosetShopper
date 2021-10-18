<?php
$to      = 'f32ee@localhost';
$subject = 'Your Order is Confirmed!';
$message = 'Thank you for shopping with Closet Shoppers';
$headers = 'From: f32ee@localhost' . "\r\n" .
    'Reply-To: f32ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff32ee@localhost');
echo ("mail sent to : ".$to);
?> 
