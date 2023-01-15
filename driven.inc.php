<?php

if(count($_POST)>0)
{
     include 'db.php';
     session_start ();
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $organization = $_POST['organization'];
     $email = $_POST['email'];
     $phoneNo = $_POST['phoneNo'];
     $population = $_POST['population'];


     $query = "INSERT INTO initiatives (firstName,lastName,organization,email,phoneNo,population)
     VALUES ('$firstName','$lastName','$organization','$email','$phoneNo','$population')";
     mysqli_query($con, $query);
     $lastId = mysqli_insert_id($con);

     if (!empty($lastId)) {
        $message = "Your contact information is saved successfully";
     }
}
  header ("Location: confirm-initiative.php");
