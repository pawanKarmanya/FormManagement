<?php
include ('connect.php');
session_start();
$id=$_SESSION["id"];
if($id){
$queryUserLogIn="select FirstName from UserTable where Id='$id'";
$resultUserLogIn=mysqli_query($link,$queryUserLogIn);
$row=mysqli_fetch_row($resultUserLogIn);
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
            <div class="col-md-3 col-md-offset-3">
                <h3>Welcome :<?php echo $row[0];?></h3>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <h1>Login Successful <a href="userLogin.php">Click me</a></h1>
            </div>
        </div>
    </body>
    
    
</html>