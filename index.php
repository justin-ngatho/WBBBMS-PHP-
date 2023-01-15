<?php
include_once "header.php" ?>
<!-- banner -->
<div class="banner">

      <div class="container">
        <h1>Blood Bank Management System</h1>

        <br><br><br><br>
        <?php
        if (isset($_SESSION["login_user"])) {
          echo "<p>Welcome to our online based blood bank management system. You now have access to the various services
          offered. incase of any challenge encountered, do not hesitate to contact us via the provided official channels!</p>";
          echo "<p>Remember, donation saves lives</p>";
        } else {
          echo "<p>
            Ever been stranded for several hours in a donation center while trying to donate blood? Or
            have you encountered frustrations while trying to request for blood from your local blood bank?
          </p>";
          echo "<p class = 'motto'>By creating an account with us, you can access this and many more services all under one roof!</p>";
        }
         ?>

      </div>
    </div>
  </header>
  <br><br>

  <!-- Donate--- -->

  <div class="donate" id="donate">
    <div class="title">
      <h2>Want to <span>Donate?</span></h2>
        <div class="underline"></div>
    </div>
    <section  class="section">
      <article class="donate-info">
        <p>In our beloved country Kenya, around 100,000 pints of blood are needed in order to supply all critically
          ill patients in need of a blood transfusion.  </p>
          <p> "Don't come to us, we will come to you!" <br> <br> Simply fill out the donation form in the link below
            with the correct details,
          and a blood donation crew will be sent to you!</p>
        <?php
         if (isset($_SESSION["login_user"])) {
          echo "<a href='donate.php' class='btn btn-don' id='btn'>Donate &#8594</a>";

         } else {
          echo "<a href='Register.php' class='btn btn-don' id='btn'>Please login to donate &#8594</a>";
         }
        ?>

        <p>You can also visit any of the below listed towns major Provincial Referral hospitals to donate; </p>

      </article>

      <article class="donate-img">
        <img src="imagess/donate.jpg" alt="donate">
      </article>
    </section>

    <div class="quick-links">
                       <div class="col-1">
                           <a href="" class="links1">Nairobi</a>
                       </div>
                       <div class="col-1">
                        <a href="" class="links2">Nakuru</a>
                    </div>
                    <div class="col-1">
                        <a href="" class="links3">Embu</a>
                    </div>
                    <div class="col-1">
                        <a href="" class="links4">Kisumu</a>
                    </div>
                    <div class="col-1">
                        <a href="" class="links5">Eldoret</a>
                    </div>
                    <div class="col-1">
                        <a href="centers.php" class="links6">Learn More <i class= "fa fa-arrow-right" aria-hidden="true"> </i></a>
                    </div
                   </div>

  </div>
  <br><br><br>
  <!-- Collected Blood -->
  <div class="blood-collection" id="collection">

    <div class="title">
      <h2>Blood Collection <span>Trends</span> </h2>
        <!-- <div class="underline"></div> -->
    </div>
<br><br>
    <?php
    include_once 'pie.php';
    ?>

</div>
  <br>
  <!---------------Request Blood---------->
  <div class="request" id="request">
    <div class="title">
      <h2>Request For <span>Blood</span></h2>
        <div class="underline"></div>
    </div>
    <section  class="section">
      <article class="donate-info">
        <p>Every day, Over 10,000 critically ill Kenyans are in urgent need of blood transfusion. This is due to the rise of sedentary and virus related
        diseases such as Leukemia, where patients require constant blood transfusion</p>
        <p>We are now giving back power to the patient with the option of requesting blood himself/herself
        without having to use the hospital as an intemediary.</p>
        <p>Patients can now request blood themselves which will be delivered to the hospital they are currently admitted</p>
        <p>If a patient is not in a capacity to request the blood, the officially registered next of Kin can request on
        his/her behalf.</p>
        <?php
         if (isset($_SESSION["login_user"])) {
          echo "<a href='request.php' class='btn btn-don' id='btn'>Request Blood &#8594</a>";

         } else {
          echo "<a href='Register.php' class='btn btn-don' id='btn'>Please login to donate &#8594</a>";
         }
         ?>
      </article>

      <article class="donate-img">
        <img src="imagess/acceptor.jpg" alt="donate">
      </article>
    </section>
  </div>
  <br><br><br>

  <!-- ----------Blood Drives------------>
  <div class="initiatives" id="initiatives">
    <div class="title">
      <h2>Blood Drives <span>Initiatives</span></h2>
           <div class="underline"></div>
    </div>
    <br>
    </section>
    <center>    <a href="driven.php" class='btn btn-don drive' id='btn' >Create Your Own Drive</a>
       <br><br><br></center>
    <?php
    include_once "drives.php";
     ?>
  </div>
  <br><br>
<!---------------Remarks--------- -->

<div class="remarks" id="remarks">
  <div class="title">
    <h2>Director's <span>Remarks</span></h2>
      <div class="underline"></div>
  </div>
  <section class="section">
    <article class="donate-img">
        <img src="imagess/director.jpg" alt="director" class="image">

    </article>
    <article class="donate-info">
            <div class="text">DR JOSEPHINE GITHAIGA , DIRECTOR KNBTS</div>
      <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
      <br>
      <br>
      <p class="director">In Kenya, 2 of every 3 units of blood are transfused to mothers and children. It is
         however depressing to note that Kenya has a relatively high maternal mortality ratio compared to
         the western world at 362 maternal deaths per 100,000 live births. The leading cause of maternal mortality
         is bleeding just before or after childbirth or due to a miscarriage,
        induced abortions and other pregnancy related complications such as tubal pregnancy. <br>
      Sufficient and safe blood supply is key to a strong health system of any country.
      Kenya is endowed with many healthy people who can donate blood. It is therefore unacceptable
      to continue watching children and mothers die due to lack of blood. It is incumbent upon us as
      Kenyans to be patriotic and develop a culture of regular blood donation. The act of donating blood is
      therefore supposed to be a process in life rather than an event.</p>
        <i class="fas fa-quote-right fa-3x fa-pull-left fa-border"></i>
    </article>
  </section>
</div>
<br><br>
<!-- ------------FeedBack----------------------->

<div class="feedback" id="feedback">
  <main>
    <section class="container-feedback">
      <!-- title -->
      <div class="title">
        <h2>User's <span>Feedback</span> </h2>
        <div class="underline"></div>
      </div>
      <!-- review -->
      <article class="review">
        <div class="img-container">
          <img src="imagess/highest-donor.png" id="person-img" alt="" />
        </div>
        <h4 id="author">Sanya Alpha Kennedy</h4>
        <p id="job">Public Prosecuter</p>
        <p id="info">
          Blood donation is the biggest gift one can give to humanity. People should give freely because it
          is given to them freely by God
        </p>
        <?php
         if (isset($_SESSION["login_user"])) {
          echo "<a href='feedback.php' class = 'btn btn-don drive'>Add your feedback here!</a>";

         } else {
          echo "<a href='Register.php' class = 'btn btn-don drive' > Sign in to let us know what you think</a>";
         }
         ?>

      </article>
    </section>
  </main>
</div>
<br><br>


<footer class="section-foot">
  <p>
    copyright &copy; Web Based Blood Bank Management System
    <span id="date"></span>. all rights reserved <br> kcaproject@gmail.com <br> 0716668308
  </p>

</footer>
<!-- JAVASCRIPT----------- -->

<?php
         if (isset($_SESSION["login_user"])) {
          echo "<a class='scroll-link top-link' href='donate.php'>
         Donate! </a>";
         } else {
          echo "<a class='scroll-link top-link' href='login.php'>
          Register! </a>";
         }
         ?>
  <a class='scroll-link top-link-left' href='#home'>
  <i class="fas fa-arrow-up"></i>
 </a>
</body>
</html>
