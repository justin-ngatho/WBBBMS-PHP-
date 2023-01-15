<?php
include_once 'header.php'; ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Give your feedback here!</h2>
            </div>

            <form action="feedback.inc.php" method="post">
                <div class="form-group">
                    <label>Name</label><br>
                    <input type="text" name="name" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" name="email" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Phone</label><br>
                    <input type="text" name="phone" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Message</label><br>
                    <input type="text" name="message" class="form-control" required="">
                </div><br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>
