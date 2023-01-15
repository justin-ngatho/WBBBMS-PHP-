<?php     
$to_email = 'justinngatho@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: justinnjue706@gmail.com\r\nreply-To: justinnjue706@gmail.com';
mail($to_email,$subject,$message,$headers);
?>