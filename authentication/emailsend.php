
<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email_address = '614rollingstone@gmail.com' ;
$subject = 'Thank You For Visiting Our Website' ;
$message = "Welcome Aboard" ;
$headers = 'From: noreply@testing.com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email_address);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
    mail($to_email_address, $subject, $message, $headers);
    echo "This email is sent using PHP Mail";
    header('location: ../public/dashboard.php?mailSend') ;
}
?>