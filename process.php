<?php
$videoid = $_POST["videoid"];
$reason = $_POST["reason"];
$message = $_POST["message"];

$EmailTo = "abuse@streamwo.com";
$Subject = "New Abuse Received";

// prepare email body text
$Body .= "VideoID: ";
$Body .= $videoid;
$Body .= "\n";

$Body .= "reason: ";
$Body .= $reason;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>