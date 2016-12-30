<?php 
if (isset($_POST['email'])) {
    // $to = "elvis.saavedra.segura@gmail.com";
    $to = "contact@elvissaavedra.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $from = "From: $name<$email>";
    $subject = "Mensaje enviado desde elvissaavedra.com";
    $message = $_POST['message'];
    // $headers = "From:" . $from;
    $headers = 'From: ' . $name . ' <' . $email . ">\r\n" ;
    $headers .='Reply-To: '. $email . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
    if (mail($to,$subject,$message,$headers)) {
        // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        return "Mail sent";
    } else {
        return "Mail not sent";
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>