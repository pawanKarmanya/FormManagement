<?php
include('connect.php');
session_start();
$Id = $_SESSION["id"];
if ($Id) {
    $Query = "select * from UserTable where Id='$Id'";
    $Result = mysqli_query($Link, $Query);
    $Row = mysqli_fetch_row($Result);
    $FirstName = $Row[1];
    $LastName = $Row[2];
    $EmailAddress = $Row[3];
    $MobileNumber = $Row[4];
    $AddressLineOne = $Row[5];
    $AddressLineTwo = $Row[6];
    $City = $Row[7];
    $State = $Row[8];
    $Country = $Row[9];
    $Zipcode = $Row[10];

    $Variable = "";
    $Array = explode(",", $AddressLineTwo);
    foreach ($Array as $X) {
        $Variable.=$X;
    }
    $Variable.=$City;
} else {
    header("Location:../index.php");
}
?>
<html>
    <head>
        <title>User View Profile</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/formcss.css" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript">

            var geocoder = new google.maps.Geocoder();
            var address = "<?php echo $Variable; ?>";
        </script>
        <script src="../js/map.js" type="text/javascript"></script>

    </head>
    <body >
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
                            <textarea class="form-control" name="addressLineOne" disabled><?php echo $AddressLineOne; ?></textarea>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Address Line 2:</label>
                            <textarea class="form-control" name="addressLineTwo" disabled><?php echo $AddressLineTwo; ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>City:</label>
                            <input type="text" class="form-control" value='<?php echo $City; ?>' disabled>

                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>State:</label>
                            <input type="text" class="form-control" value='<?php echo $State; ?>' disabled>

                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Country:</label>
                            <input type="text" class="form-control" value='<?php echo $Country; ?>' disabled>

                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>ZipCode:</label>
                            <input type="tel" class="form-control" value='<?php echo $Zipcode; ?>' disabled>

                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5 topmore">

            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#MapModal"><span class="glyphicon glyphicon-map-marker"></span> Location</button>
        </div>

        <div class="modal fade" id="MapModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Location</h4>
                    </div>
                    <div class="modal-body">

                        <div id="googleMap" style="height:500px;"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>



    </body>
</html>
