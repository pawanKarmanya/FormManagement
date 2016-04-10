<?php
include("connect.php");
if(isset($_POST["changePassword"])){
session_start();
$id=$_SESSION["id"];

$query="select Password from UserTable where Id='$id'";
$result=mysqli_query($link,$query);
if(!$result){
    $error="Could not get your details re-enter";
}
else{
$row=mysqli_fetch_row($result);
$oldpassword=$_POST["oldPassword"];
$newpassword=$_POST["newPassword"];
if($oldpassword==$row[0]){
    $queryinsert="update UserTable set Password='$newpassword' where Id='$id'";
    $resultinsert=mysqli_query($link,$queryinsert);
    if($resultinsert){
        $message="Password changed successfully";
    }
}
 else {
     $error="Invalid password Please check and re-enter";
}
}
}
?>