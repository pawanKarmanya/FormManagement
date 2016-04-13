<?php

include('connect.php');
session_start();
$Id = $_SESSION["id"];
$QueryValidate = "select FirstName from UserTable where type='admin' and Id='$Id'";
$ResultValidate = mysqli_query($Link, $QueryValidate);
$RowValidate = mysqli_fetch_row($ResultValidate);
if ($RowValidate) {

    $EmailAddress = $_SESSION["email"];
    $Query = "select * from UserTable where EmailAddress='$EmailAddress'";
    $Result = mysqli_query($Link, $Query);
    $Row = mysqli_fetch_row($Result);
    $FirstName = $Row[1];
    $LastName = $Row[2];
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
    if (isset($_POST["adminEdit"])) {
        header("Location:admineditdeletefront.php");
    }
    if (isset($_POST["adminDelete"])) {
        $Email = $_SESSION["email"];
        $DeleteQuery = "delete from UserTable where EmailAddress='$Email'";
        $DeleteResult = mysqli_query($link, $DeleteQuery);
        if ($DeleteResult) {
            $Error = "Profile Successfully Deleted";
        }
    }
} else {
    header("Location:../index.php");
}
?>


