
<?php
include_once "header.php"
?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h3>Please Fill in all fields with the correct details</h3>
            </div>

            <form action="donate.inc.php" method="post">
                <div class="form-group">
                    <label>First Name</label> <br>
                    <input type="text" name="firstName" class="form-control" required="">
                </div>
                <div class="form-group"><br>
                    <label>Last Name</label><br>
                    <input type="text" name="lastName" class="form-control" required="">
                </div>
                <div class="form-group"><br>
                    <label>Email</label><br>
                    <input type="email" name="email" class="form-control" required="">
                <div class="form-group"><br>
                    <label>Phone No.</label><br>
                    <input type="text" name="phoneNo" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Location</label><br>
                    <input type="text" name="location" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Have you donated the past 1 month?</label><br>
                    <input type="text" name="alert" class="form-control" required="">
                </div> <br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>
   </div>
</body>
</html>
