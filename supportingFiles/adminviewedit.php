<?php include ('adminview.php'); ?>
<html>
    <head>
        <title>User Details</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/formcss.css" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script>
        <script type="text/javascript">

            var geocoder = new google.maps.Geocoder();
            var address = "<?php echo $Variable; ?>";
        </script>
        <script src="../js/map.js" type="text/javascript"></script>


    </head>
    <body>
        <nav class="admindashboard">

        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-1 top"><?php
                    if (isset($Error)) {
                        echo "<div class='alert alert-danger'>" . $Error . "</div>";
                    }
                    ?></div>
                <form class="form-horizontal" method="post">
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>First Name:</label>
                            <input type="text" class="form-control" value="<?php echo $FirstName; ?>" disabled >
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
                            <textarea class="form-control" name="addressLineOne"  disabled><?php echo $AddressLineOne; ?></textarea>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Address Line 2:</label>
                            <textarea class="form-control" name="addressLineTwo"  disabled><?php echo $AddressLineTwo; ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>City:</label>
                            <input type="text" class="form-control" name="city" value='<?php echo $City; ?>' id="city" disabled>
                            <p id="citypara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>State:</label>
                            <input type="text" class="form-control" name="state" id="state" value='<?php echo $State; ?>' disabled>
                            <p id="statepara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Country:</label>
                            <input type="text" class="form-control" name="country" id="country" value='<?php echo $Country; ?>' disabled>
                            <p id="countrypara"></p>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>ZipCode:</label>
                            <input type="tel" class="form-control" maxlength="7" name="zipcode" value='<?php echo $Zipcode; ?>' id="zipcode" disabled>
                            <p id="zipcodepara"></p>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminEdit' value="Edit Profile" class="btn btn-success"></div>
                        <div class="col-md-1 col-md-offset-1">
                            <input type="submit" name="adminDelete" class="btn btn-success" value="Delete Profile">
                        </div>
                    </div>
                </form>

            </div>


        </div>


        <div class="col-md-2 col-md-offset-5 topmore">

            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#MapModal"><span class="glyphicon glyphicon-map-marker"></span> Location</button>
        </div>

        <div class="modal" id="MapModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Location</h4>
                    </div>
                    <div class="modal-body">

                        <div id="googleMap" style="align:center; height:400px;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


    </body>


</html>