<?php
if(isset($_POST['submit'])) {
    $sender=$_POST['name'];
    $subject=$_POST['subject'];
    $senderEmail=$_POST['email'];
    $message=$_POST['message'];
	
    $recipient="dealgame.contact@gmail.com";
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
	
    mail($recipient, $subject, $mailBody);
    header("Location: http://thedealergame.com/");
}
?>
