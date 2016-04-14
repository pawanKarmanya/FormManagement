<?php
include ('connect.php');
session_start();
$Id=$_SESSION["id"];
$QueryValidate = "select FirstName from UserTable where Type='admin' and Id='$Id'";
$ResultValidate = mysqli_query($Link, $QueryValidate);
$RowValidate = mysqli_fetch_row($ResultValidate);
if ($RowValidate) {

$QueryAdminLogIn="select FirstName from UserTable where Id='$Id'";
$ResultAdminLogIn=mysqli_query($Link,$QueryAdminLogIn);
$Row=mysqli_fetch_row($ResultAdminLogIn);
}
else {
    header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Admin Login success page</title>
        
        <script type="text/javascript" src="../js/jquery.js"></script>
        
        <script type="text/javascript" src="../js/dashboard.js"></script>
    </head>
    <body>
        <nav class="emptydashboard">
            
        </nav>
        <div class="container">
            <div class="col-md-3 col-md-offset-5">
                <h3><?php echo $Row[0] ;?></h3>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <h1>Login Successful <a href="adminLogin.php">Click me</a></h1>
            </div>
        </div>
    </body>
    
    
</html>