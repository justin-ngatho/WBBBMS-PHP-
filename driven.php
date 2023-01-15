<?php
include_once "header.php"
?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Register for a chance to host a blood drive</h2>
            </div>

            <form action="driven.inc.php" method="post">
                <div class="form-group">
                    <label>First Name:</label> <br>
                    <input type="text" name="firstName" class="form-control" required="">
                </div>
                <div class="form-group"><br>
                    <label>Last Name:</label><br>
                    <input type="text" name="lastName" class="form-control" required="">
                </div> <br>
                <div class="form-group">
                    <label>Organization Name:</label><br>
                    <input type="text" name="organization" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Email:</label><br>
                    <input type="email" name="email" class="form-control" required="">
                <div class="form-group"><br>
                    <label>Phone No:</label><br>
                    <input type="text" name="phoneNo" class="form-control" required="">
                </div><br>

                <div class="form-group">
                    <label>Population:</label><br>
                    <input type="text" name="population" class="form-control" required="">
                </div> <br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>
   </div>
</body>
</html>
