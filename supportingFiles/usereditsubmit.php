<?php

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
    if (isset($_POST["userEdit"])) {
        if ($_POST["userEdit"] == "SUBMIT") {
            $EditAddressOne = $_POST["addressLineOne"];
            $EditAddressTwo = $_POST["addressLineTwo"];
            $EditCity = $_POST["city"];
            $EditState = $_POST["state"];
            $EditCountry = $_POST["country"];
            $EditZipCode = $_POST["zipcode"];
            
            if (!preg_match("/^[a-zA-Z ]*$/", $EditCity)) {
        $Error = "No number and special characters in City Name";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/", $EditState)) {
        $Error = "No number and special characters in State Name";
    }
    elseif($EditAddressOne==""){
        $Error = "Address should not be empty";
    }
    
    else if(!preg_match("/^[1-9][0-9]{5,5}$/", $EditZipCode)){
        $Error="Zipcode length should be 6";
    }
            
        else{   
            
            
            $QueryEdit = "update UserTable set AddressLineOne='$EditAddressOne', AddressLineTwo='$EditAddressTwo', City='$EditCity', State='$EditState', Country='$EditCountry', ZipCode='$EditZipCode' where Id='$Id'";
            $EditResult = mysqli_query($Link, $QueryEdit);
            if ($EditResult) {

                $Message = "Successfully Updated the Profile";
            } else {
                $Error = "Profile could not be Updated Please try again";
            }
        }}
    }
} else {
    header("Location:../index.php");
}
?>