<?php include ('adminusersubmit.php'); ?>
<html>
    <head>
        <title>Admin Create User</title>

        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script> 
        <script type="text/javascript" src="../js/customjs.js"></script>

    </head>
    <body>
        <nav class="admindashboard">
        </nav>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" method="post">
                    <div class="col-md-12 topmore">
                        <div class="col-md-3 col-md-offset-2">
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="firstName" id="firstName">
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" name="emailAddress" id="emailAddress">
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Mobile Number:</label>
                            <input type="tel" class="form-control" maxlength="10" name="mobileNumber" id="mobileNumber">
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <p id="passwordpara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Confirm Password:</label>
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                            <p id="confirmpasswordpara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminCreateUser' value="SUBMIT" class="btn btn-success"></div>
                        <div class="col-md-1 col-md-offset-1">
                            <input type="reset" name="reset" class="btn btn-success" value="RESET">
                        </div>
                    </div>
                </form>
                <div class="col-md-8 top col-md-offset-1">
                    <?php
                    if (isset($Error)) {
                        echo "<div class='alert alert-danger'>" . $Error . "</div>";
                    }
                    ?>
                    <?php
                    if (isset($Message)) {
                        echo "<div class='alert alert-success'>" . $Message . "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>