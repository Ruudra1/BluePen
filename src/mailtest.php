<?php

    require_once "Mail.php";  
    include_once 'includes/connect.inc.php';


    $from    = "bluepenassign@gmai.com";  
    $to      = "bhavyaharia100@gmail.com";  
    $subject = "Test mail";  
    $body    = "body of test mail";  
    $message = "message of test mail";
    
    /* SMTP server name, port, user/passwd */  
    $smtpinfo["host"] = "ssl://smtp.gmail.com";  
    $smtpinfo["port"] = "465";  
    $smtpinfo["auth"] = true;  
    $smtpinfo["username"] = "bluepenassign@gmail.com";  
    $smtpinfo["password"] = "marshmallow_111";  
      
      
    $smtp = Mail::factory('smtp', $smtpinfo );  

    $email = "bhavyaharia100@gmail.com";
    $headers = array ('From' => $from,'To' => $email,'Subject' => $subject);
    $mail = $smtp->send($email, $headers, $body);

    // $mail = $smtp->send()
    //$smtp->addHTMLImage("./images/2.jpg");
    //$mail = $smtp->send($to, $headers, $body);  
    //$smtp->send($to1, $headers, $body);
    //$smtp->send($to2, $headers, $body);



?>