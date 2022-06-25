<?php

// define variables
$senderName   = $_POST['userName'];
$senderEmail     = $_POST['userEmail'];
$senderSubject   = $_POST['userSubject'];
$senderMessage = $_POST['userMsg'];

// remove slashes from the variables
$senderName   = stripslashes($senderName);
$senderEmail     = stripslashes($senderEmail);
$senderMessage   = stripslashes($senderMessage); 


//    change this to your email
      $to = "aska.szr@gmail.com";

     // Place sender Email address here
    $from = "$senderEmail ";
    $subject = "$senderSubject";
    //Begin HTML Email Message
    $message = <<<EOF
<html>
  <body bgcolor="#FFFFFF">
<b>Name</b> : $senderName<br /><br />
<b>Email</b> : <a href="mailto:$senderEmail">$senderEmail</a><br /><br />
<b>Subject</b> : $senderSubject<br /><br />
<b>Message</b> : $senderMessage<br />
  </body>
</html>
EOF;
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";
    $to = "$to";

    mail($to, $subject, $message, $headers);
	
exit();
?>