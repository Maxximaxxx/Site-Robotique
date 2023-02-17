<?php
if(isset($_POST['email'])) {
    // recipient email address
    $to = "maxkevm690@gmail.com";

    // email subject
    $subject = "Contact Form Submission";

    // form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // email headers
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    // send email
    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Sorry, there was a problem sending your message. Please try again later.";
    }
}
?>
