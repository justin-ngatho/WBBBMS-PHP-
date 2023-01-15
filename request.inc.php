<?php

if(count($_POST)>0)
{
     include 'db.php';

     $username = $_POST['username'];
     $email = $_POST['email'];
     $phoneNo = $_POST['phoneNo'];
     $bloodType = $_POST['bloodtype'];
     $location = $_POST['location'];


     $query = "INSERT INTO request (username,email,phoneNo,bloodtype,location)
     VALUES ('$username','$email' ,'$phoneNo','$bloodType','$location')";
     mysqli_query($con, $query);
     $lastId = mysqli_insert_id($con);

     if (!empty($lastId)) {
        $message = "Your Blood request has been received and is being processed.
         Our team will contact you in a short while";
     }
}
  header ("Location: confirm-request.php");
