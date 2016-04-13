

<?php

include('connect.php');
session_start();
$id = $_SESSION["id"];
$queryvalidate = "select FirstName from UserTable where type='admin' and Id='$id'";
$resultvalidate = mysqli_query($link, $queryvalidate);
$rowvalidate = mysqli_fetch_row($resultvalidate);
if ($rowvalidate) {


    $emailAddress = $_SESSION["email"];
    $query = "select * from UserTable where EmailAddress='$emailAddress'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_row($result);
    $firstName = $row[1];
    $lastName = $row[2];
    $mobileNumber = $row[4];
    $addressLineOne = $row[5];
    $addressLineTwo = $row[6];

    $city = $row[7];
    $state = $row[8];
    $country = $row[9];
    $zipcode = $row[10];
    $variable = "";
    $array = explode(",", $addressLineTwo);
    foreach ($array as $x) {
        $variable.=$x;
    }
    $variable.=$city;
    if (isset($_POST["adminEdit"])) {
        header("Location:admineditdeletefront.php");
    }
    if (isset($_POST["adminDelete"])) {
        $email = $_SESSION["email"];
        $deletequery = "delete from UserTable where EmailAddress='$email'";
        $deleteresult = mysqli_query($link, $deletequery);
        if ($deleteresult) {
            $error = "Profile Successfully Deleted";
        }
    }
} else {
    header("Location:../index.php");
}
?>


