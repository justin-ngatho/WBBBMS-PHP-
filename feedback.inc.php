<?php
if(count($_POST)>0)
{    
     include 'db.php';
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $message = $_POST['message'];
 
     $query = "INSERT INTO feedback (name,email,phone,message)
     VALUES ('$name','$email', 'phone','$message')";
     mysqli_query($con, $query);
     $lastId = mysqli_insert_id($con);
 
     if (!empty($lastId)) {
        $message = "Your contact information is saved successfully";
     }
}
  header ("Location: thank-you.php");
?>
