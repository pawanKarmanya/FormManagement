<?php
include ('connect.php');
session_start();
$id=$_SESSION["id"];

$queryvalidate = "select FirstName from UserTable where type='admin' and Id='$id'";
$resultvalidate = mysqli_query($link, $queryvalidate);
$rowvalidate = mysqli_fetch_row($resultvalidate);
if ($rowvalidate) {

$queryAdminLogIn="select FirstName from UserTable where Id='$id'";
$resultAdminLogIn=mysqli_query($link,$queryAdminLogIn);
$row=mysqli_fetch_row($resultAdminLogIn);
}
else {
    header("Location:../index.php");
}
?>
<html>
    <head>
        <title>User Login success page</title>
        
        <script type="text/javascript" src="../js/jquery.js"></script>
        
        <script type="text/javascript" src="../js/dashboard.js"></script>
    </head>
    <body>
        <nav class="emptydashboard">
            
        </nav>
        <div class="container">
            <div class="col-md-3 col-md-offset-5">
                <h3><?php echo $row[0] ;?></h3>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <h1>Login Successful <a href="adminLogin.php">Click me</a></h1>
            </div>
        </div>
    </body>
    
    
</html>