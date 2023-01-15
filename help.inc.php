<?php
if(count($_POST)>0)
{    
     include 'db.php';
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['number'];
     $question = $_POST['question'];
 
     $query = "INSERT INTO help_centre (name,email,number,question)
     VALUES ('$name','$email' ,'$number','$question')";
     mysqli_query($con, $query);
     $lastId = mysqli_insert_id($con);
 
     if (!empty($lastId)) {
        $message = "Your contact information is saved successfully";
     }
}
  header ("Location: thankyou.php");
?>
