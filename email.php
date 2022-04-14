<?php
$to = 'hotelgardencreekresidency@gmail.com';
$subject = 'Garden Creek msg';
$message = 'Welcome to Garden Creek?'; 
$from = '';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>