<?php

include ('connect.php');
session_start();
$Id = $_SESSION["id"];
$QueryValidate = "select FirstName from UserTable where type='admin' and Id='$Id'";
$ResultValidate = mysqli_query($Link, $QueryValidate);
$RowValidate = mysqli_fetch_row($ResultValidate);
if ($RowValidate) {
    $Email = $_SESSION["email"];
    $QueryUser = "select * from UserTable where EmailAddress='$Email'";
    $ResultUser = mysqli_query($Link, $QueryUser);
    $RowUser = mysqli_fetch_row($ResultUser);
    if ($RowUser) {

        $UserFirstName = $RowUser[1];
        $UserLastName = $RowUser[2];
        $UserEmailAddress = $RowUser[3];
        $UserMobileNumber = $RowUser[4];
        $UserAddressOne = $RowUser[5];
        $UserAddressTwo = $RowUser[6];
        $UserCity = $RowUser[7];
        $UserState = $RowUser[8];
        $UserCountry = $RowUser[9];
        $UserZipCode = $RowUser[10];
    } else {
        $Error = "Could not retrieve the details try again";
    }

    if (isset($_POST["adminEditFront"])) {

        $FirstName = $_POST["firstName"];
        $LastName = $_POST["lastName"];
        $EmailAddress = $_POST["emailAddress"];
        $MobileNumber = $_POST["mobileNumber"];
        $AddressOne = $_POST["addressLineOne"];
        $AddressTwo = $_POST["addressLineTwo"];
        $City = $_POST["city"];
        $State = $_POST["state"];
        $Country = $_POST["country"];
        $Zipcode = $_POST["zipcode"];
        $Type = "User";
        
        if (!preg_match("/^[a-zA-Z ]*$/", $FirstName)) {
        $Error = "Characters and white space is allowed in First Name";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/", $LastName)) {
        $Error = "Characters and white space is allowed in Last Name";
    }
    else if (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) {
        $Error = "Invalid Email Address";
    }
    
    else if(!preg_match("/^[1-9][0-9]{9,9}$/", $MobileNumber)){
        $Error="Phone number should be 10 number";
    }
    else{
        $Query = "update UserTable set FirstName='$FirstName', LastName='$LastName', EmailAddress='$EmailAddress', MobileNumber='$MobileNumber', AddressLineOne='$AddressOne', AddressLineTwo='$AddressTwo', City='$City', State='$State', Country='$Country', ZipCode='$Zipcode' where EmailAddress='$Email'";
        $Result = mysqli_query($Link, $Query);
        if (!$Result) {
            $Error = "Error while registering Try ones again";
        } else {
            $Message = $EmailAddress . " Id is successfully Edited";
        }
    }
} else {
    header("Location:../index.php");
}}
?>