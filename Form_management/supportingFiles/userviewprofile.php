<?php
include('connect.php');
session_start();
$id = $_SESSION["id"];
if ($id) {
    $query = "select * from UserTable where Id='$id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_row($result);
    $firstName = $row[1];
    $lastName = $row[2];
    $emailAddress = $row[3];
    $mobileNumber = $row[4];
    $addressLineOne = $row[5];
    $addressLineTwo = $row[6];
    $city = $row[7];
    $state = $row[8];
    $country = $row[9];
    $zipcode = $row[10];
    
  $variable="";
  $array=explode(",",$addressLineTwo);
  foreach($array as $x){
      $variable.=$x;
  }
  $variable.=$city;
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
            var address = "<?php echo $variable; ?>";
        </script>
      <script src="../js/map.js" type="text/javascript"></script>
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
                            <input type="text" class="form-control" value="<?php echo $firstName; ?>" disabled>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" value='<?php echo $lastName; ?>' disabled>
                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Email Address:</label>
                            <input type="text" class="form-control" value='<?php echo $emailAddress; ?>' disabled>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value='<?php echo $mobileNumber; ?>' disabled>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Address Line 1:</label>
                            <textarea class="form-control" name="addressLineOne" disabled><?php echo $addressLineOne; ?></textarea>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>Address Line 2:</label>
                            <textarea class="form-control" name="addressLineTwo" disabled><?php echo $addressLineTwo; ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>City:</label>
                            <input type="text" class="form-control" value='<?php echo $city; ?>' disabled>

                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>State:</label>
                            <input type="text" class="form-control" value='<?php echo $state; ?>' disabled>

                        </div>
                    </div>
                    <div class="col-md-12 top">
                        <div class="col-md-3 col-md-offset-2">
                            <label>Country:</label>
                            <input type="text" class="form-control" value='<?php echo $country; ?>' disabled>

                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <label>ZipCode:</label>
                            <input type="tel" class="form-control" value='<?php echo $zipcode; ?>' disabled>

                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5 topmore">

            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Location</button>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        
<div id="googleMap" style="width:700px;height:500px;"></div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>



    </body>
</html>
