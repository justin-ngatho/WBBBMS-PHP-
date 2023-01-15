<?php
include_once 'header.php';
?>
<?php
include 'session.php';
?>


<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h3>Please fill in all fields with the correct details</h3>
            </div>

            <form action="request.inc.php" method="post">
                <div class="form-group">
                    <label>Username</label> <br>
                    <input type="text" name= "username" class="form-control" required=""
                   value = "<?php echo $loggedin_session;?>">
                </div><br>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" name="email" class="form-control" required = "">
                  </div><br>
                <div class="form-group">
                    <label>Phone No.</label><br>
                    <input type="text" name="phoneNo" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Blood Type</label><br>
                    <input type="text" name="bloodtype" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Location</label><br>
                    <input type="text" name="location" class="form-control" required="">
                </div><br>

                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>
