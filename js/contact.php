<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: TrevorCreative'; 
    $to = 'trevorcollinson@gmail.com'; 
    $subject = 'test';			
    $body = "From: $firstname\n $lastname\n E-Mail: $email\n Message:\n $message";
	header('Location: http://trevorcreative.com/');
if ($_POST['submit']) {
    if ($firstname != '' && $lastname != '' && $email != '' && $message != '') {			 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	}
}
?>