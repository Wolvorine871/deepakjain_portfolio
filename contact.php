1<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['input-email'];
$message = $_REQUEST['input-message'];

if(empty($name) || empty($email) || empty($message))
{
    echo "<script type='text/javascript'> 
    alert('Oops! You should fill all the fields');
    window.history.back();
    </script>";
}
else
{
    mail("deepakjainlpu@gmail.com","Portfolio Message",$message,"From: $name <$email>");
    echo " <script type='text/javascript'> 
    alert('Thankyou! your message sent successfully');
    window.history.back();
    </script>";
}


?>