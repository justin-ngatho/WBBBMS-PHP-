<?php
include_once 'header.php'; ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h3>We are here to help you! Ask away your concerns <br> and we will reply as soon as we can</h3>
            </div>

            <form action="help.inc.php" method="post">

                <div class="form-group">
                    <label>Name</label><br>
                    <input type="text" name="name" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" name="email" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Number</label><br>
                    <input type="number" name="number" class="form-control" required="">
                </div><br>
                <div class="form-group">
                    <label>Question</label><br>
                    <input type="text" name="question" class="form-control" required="">
                </div><br>
                <input type="submit" class="btn btn-primary" name="submit" value="submit">
            </form><br>
        </div>
    </div>
</div>
</body>
</html>
