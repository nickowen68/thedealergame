<?php
if(isset($_GET['submit'])) {
	$sender=$_GET['name'];
    $subject=$_GET['subject'];
    $senderEmail=$_GET['email'];
    $message=$_GET['message'];
	
	$recipient="dealgame.contact@gmail.com";
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
	
    mail($recipient, $subject, $mailBody);
    header("Location: http://thedealergame.com/");
}
?>
