<?php
	header('Content-type: application/json');
	

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = 'makechangecountforschools@gmail.com';
    $email_to = 'esubhash@gmail.com';

    //$email_to = 'esubhash@gmail.com;makechangecountforschools@gmail.com;jedisohan@gmail.com;itswu.alex@gmail.com';


    $status = array(
        'type'=>'success',
        'message'=>'Thank you ' . $name . '. Email sent!!!'
    );

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    header("Location: contact-thankyou.html");

    //echo json_encode($status);
    die;