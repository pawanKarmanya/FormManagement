<?php
session_start();
$id=$_SESSION["id"];
if($id){
$query="select * from UserTable where Id='$id'";
$result=mysqli_query($link, $query);
$row=mysqli_fetch_row($result);
$firstName=$row[1];
$lastName=$row[2];
$emailAddress=$row[3];
$mobileNumber=$row[4];
$addressLineOne=$row[5];
$addressLineTwo=$row[6];
$city=$row[7];
$state=$row[8];
$country=$row[9];
$zipcode=$row[10];
if(isset($_POST["userEdit"])){
    if($_POST["userEdit"]=="SUBMIT"){
    $editAddressOne=$_POST["addressLineOne"];
    $editAddressTwo=$_POST["addressLineTwo"];
    $editCity=$_POST["city"];
    $editState=$_POST["state"];
    $editCountry=$_POST["country"];
    $editZipCode=$_POST["zipcode"];
    $queryedit="update UserTable set AddressLineOne='$editAddressOne', AddressLineTwo='$editAddressTwo', City='$editCity', State='$editState', Country='$editCountry', ZipCode='$editZipCode' where Id='$id'";
    $editResult=mysqli_query($link, $queryedit);
    if($editResult){
        
        $message="Successfully Updated the Profile";
    }
    else{
        $error="Profile could not be Updated Please try again";
    }
}}
}
else{
       header("Location:../index.php");
}
?>