<?php
include_once 'logincheck.php';
?>
<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Based Blood Bank Management System</title>

  <!-- CSS -->
  <style>
    <?php
    include 'styles.css'; ?>
<?php include "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" ?>
<?php include "styles3.css"; ?>

  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="app3.js" ></script>


</head>
<body>
  <header id="home">
    <!-- navbar -->
    <nav id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <img src="imagess/logo3.png" class="logo" alt="logo" />

            <div class='dropdown'>
                <button class='nav-toggle' >  <i class="fas fa-bars"></i></button>
                <div class='dropdown-content'>
                  <ul class="links">
                    <li> <a href='index.php' >Home</a> </li>
                      <?php
                      if (isset($_SESSION["login_user"])) {
                        echo "<li><a href='welcome.php' >profile page</a></li>";
                        echo "<li><a href='donate.php'>Donate</a></li>";
                        echo "<li><a href='request.php' >Request Blood</a></li>";
                        echo "<li><a href='faq.php' >FAQ</a></li>";
                        echo "<li><a href='help.php' >Help Center</a></li>";
                        echo "<li><a href='logout.php' >Log out</a></li>";

                      } else {
                        echo "<li><a href='login.php' >register/login</a></li>";
                        echo "<li><a href='faq.php' >FAQ</a></li>";
                        echo "<li><a href='help.php' >Help Center</a></li>";

                      }
                      ?>
                      <li><a href="https://www.facebook.com/jystynn.ngythyn"><i class="fab fa-facebook"></i></a></li>
                      <li><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></li>

                  </ul>

                </div>
              </div>
          </div>


        <!-- links -->
        <div class="links-container">
          <ul class="links">
          <li> <a href='index.php' >Home</a> </li>
            <?php
            if (isset($_SESSION["login_user"])) {
              echo "<li><a href='welcome.php' >profile page</a></li>";
              echo "<li><a href='donate.php'>Donate</a></li>";
              echo "<li><a href='request.php' >Request Blood</a></li>";
              echo "<li><a href='faq.php' >FAQ</a></li>";
              echo "<li><a href='help.php' >Help Center</a></li>";
              echo "<li><a href='logout.php' >Log out</a></li>";

            } else {
              echo "<li><a href='login.php' >register/login</a></li>";
              echo "<li><a href='faq.php' >FAQ</a></li>";
              echo "<li><a href='help.php' >Help Center</a></li>";

            }
            ?>
            <li><a href="https://www.facebook.com/jystynn.ngythyn"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></li>




          </ul>
        </div>

    </nav>
