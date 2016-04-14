<?php

include("connect.php");
if (isset($_POST["changePassword"])) {
    session_start();
    $Id = $_SESSION["id"];
    $Query = "select Password from UserTable where Id='$Id'";
    $Result = mysqli_query($Link, $Query);
    if (!$Result) {

        $Error = "Could not get your details re-enter";
    } else {

        $Row = mysqli_fetch_row($Result);
        $OldPassword = $_POST["oldPassword"];
        $NewPassword = $_POST["newPassword"];
        if ($OldPassword == $Row[0]) {

            $QueryInsert = "update UserTable set Password='$NewPassword' where Id='$Id'";
            $ResultInsert = mysqli_query($Link, $QueryInsert);
            if ($ResultInsert) {

                $Message = "Password changed successfully";
            }
        } else {

            $Error = "Invalid password Please check and re-enter";
        }
    }
}
?>