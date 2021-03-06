<?php
include('connect.php');
include ('usereditsubmit.php');
?>
<html>
    <head>
        <title>User Edit Profile</title>
        <link href="../css/formcss.css" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script>
        <script type="text/javascript" src="../js/customjs.js"></script>
    </head>
    <body>
        <nav class="userdashboard">
        </nav>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" method="post">
                    <div class="col-md-12 topmore">
                        <div class="col-md-3 col-md-offset-2">
                            <label>First Name:</label>
                            <input type="text" class="form-control" value="<?php echo $FirstName; ?>" disabled>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" value='<?php echo $LastName; ?>' disabled>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" value='<?php echo $EmailAddress; ?>' disabled>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value='<?php echo $MobileNumber; ?>' disabled>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Address Line 1:</label>
                            <textarea class="form-control" name="addressLineOne"  required><?php echo $AddressLineOne; ?></textarea>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Address Line 2:</label>
                            <textarea class="form-control" name="addressLineTwo"  required><?php echo $AddressLineTwo; ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>City:</label>
                            <input type="text" class="form-control" name="city" value='<?php echo $City; ?>' id="city" required>
                            <p id="citypara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>State:</label>
                            <input type="text" class="form-control" name="state" id="state" value='<?php echo $State; ?>' required>
                            <p id="statepara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Country:</label>
                            <input type="text" class="form-control" name="country" id="country" value='<?php echo $Country; ?>' required>
                            <p id="countrypara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>ZipCode:</label>
                            <input type="tel" class="form-control" maxlength="6" name="zipcode" value='<?php echo $Zipcode; ?>' id="zipcode" required>
                            <p id="zipcodepara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='userEdit' value="SUBMIT" class="btn btn-success"></div>
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