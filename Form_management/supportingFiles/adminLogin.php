<?php
include ('connect.php');
session_start();
$id = $_SESSION["id"];
$queryvalidate = "select FirstName from UserTable where type='admin' and Id='$id'";
$resultvalidate = mysqli_query($link, $queryvalidate);
$rowvalidate = mysqli_fetch_row($resultvalidate);
if ($rowvalidate) {
    $query = "select FirstName, LastName, EmailAddress from UserTable where type='user'";
    $result = mysqli_query($link, $query);
} else {
    header("Location:../index.php");
}
?>

<html>
    <head>
        <title>Admin Login</title>

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
<?php while ($row = mysqli_fetch_row($result)) { ?>
    <?php echo'["'; ?><?php echo "$row[0]"; ?> <?php echo'","'; ?><?php echo "$row[1]"; ?> <?php echo'","'; ?><?php echo "$row[2]"; ?>  <?php echo'"]'; ?><?php echo",";
} ?>

            ];




        </script>


        <table id="example" class="display" width="100%"></table>



    </body>
</html>