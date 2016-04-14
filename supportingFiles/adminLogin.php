<?php
include ('connect.php');
session_start();
$Id = $_SESSION["id"];
$QueryValidate = "select FirstName from UserTable where Type='admin' and Id='$Id'";
$ResultValidate = mysqli_query($Link, $QueryValidate);
$RowValidate = mysqli_fetch_row($ResultValidate);
if ($RowValidate) {
    $Query = "select FirstName, LastName, EmailAddress from UserTable where Type='user'";
    $Result = mysqli_query($Link, $Query);
} else {
    header("Location:../index.php");
}
?>

<html>
    <head>
        <title>Admin Login Page</title>

        <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script>
        <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="../js/adminjs.js"></script>
    </head>
    <body>
        <nav class="admindashboard">
        </nav>
        <script>
            dataSet = [
<?php while ($Row = mysqli_fetch_row($Result)) { ?>
    <?php echo'["'; ?><?php echo "$Row[0]"; ?> <?php echo'","'; ?><?php echo "$Row[1]"; ?> <?php echo'","'; ?><?php echo "$Row[2]"; ?>  <?php echo'"]'; ?><?php
    echo",";
}
?>];
        </script>
        <table id="example" class="display " width="100%"></table>

    </body>
</html>