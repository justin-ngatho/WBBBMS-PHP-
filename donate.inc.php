<?php

if(count($_POST)>0)
{    
     include 'db.php';
     session_start ();
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $email = $_POST['email'];
     $phoneNo = $_POST['phoneNo'];
     $location = $_POST['location'];
     $alert = $_POST['alert'];
 
     $query = "INSERT INTO donate (firstName,lastName,email,phoneNo,location,alert)
     VALUES ('$firstName','$lastName','$email' ,'$phoneNo','$location','$alert')";
     mysqli_query($con, $query);
     $lastId = mysqli_insert_id($con);
 
     if (!empty($lastId)) {
        $message = "Your contact information is saved successfully";
     }
}
  header ("Location: confirm-donate.php");


  function getData($fieldName){
    $db = new mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

    $userId = $_SESSION['username'];

    return $con->where('mem_id', $userId)
              ->getOne('member', $fieldName);
}

