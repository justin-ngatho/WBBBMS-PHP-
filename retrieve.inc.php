<?php

include 'db.php';
$query="select * from member limit 50"; // Fetch all the data from the table customers
$result=mysqli_query($con,$query);
?>