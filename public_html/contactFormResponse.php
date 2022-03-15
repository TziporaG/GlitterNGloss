<?php
   include "header.php";
 ?>


<?php

$notifications = "Yes";

if (isset($_POST["notifications"])) {
    
   $notifications = "No";
} 

require "C:/xampp/htdocs/PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php";
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'glitterngloss6@gmail.com';
$mail->Password = 'PHPTermProject2022';
$mail->setFrom('glitterngloss6@gmail.com');
$mail->Subject = 'Customer Form Sumbission';
$mail->Body = 
        "Customer Name: " . $_POST["fname"] . " " . $_POST["lname"] . "\n" .
        "Customer question/comment: " . $_POST["comments"]. "\n"   .
        "Customer email: " . $_POST["email"]. "\n"  .
        "Receive Notifications: " . $notifications;


//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "<br><br><br><br><br><br>Thank you for contacting us. Please look out for our promt reply.";
    echo "<br><a href='index.php'>Back to home</a><br><br><br><br><br>";
}

?>


<?php
   include "footer.php";
 ?>


