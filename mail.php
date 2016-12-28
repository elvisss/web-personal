<?php 
if (isset($_POST['email'])) {
    $to = "elvis.saavedra.segura@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $from = "From: $name<$email>";
    $subject = "Email desde elvissaavedra.com";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    if (mail($to,$subject,$message,$from)) {
        // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        return "Mail sent";
    } else {
        return "Mail not sent";
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>