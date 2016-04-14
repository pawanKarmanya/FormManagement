<?php

include ('connect.php');
session_start();
$Id = $_SESSION["id"];
$QueryValidate = "select FirstName from UserTable where Type='admin' and Id='$Id'";
$ResultValidate = mysqli_query($Link, $QueryValidate);
$RowValidate = mysqli_fetch_row($ResultValidate);
if ($RowValidate) {

    if (isset($_POST["adminCreateUser"])) {

        $FirstName = $_POST["firstName"];
        $LastName = $_POST["lastName"];
        $EmailAddress = $_POST["emailAddress"];
        $Password = $_POST["password"];
        $ConfirmPassword = $_POST["confirmPassword"];
        $MobileNumber = $_POST["mobileNumber"];

        if (!preg_match("/^[a-zA-Z ]*$/", $FirstName)) {
            $Error = "Characters and white space is allowed in First Name";
        } else if (!preg_match("/^[a-zA-Z ]*$/", $LastName)) {
            $Error = "Characters and white space is allowed in Last Name";
        }  else if (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) {
            $Error = "Invalid Email Address";
        } else if ($Password != $ConfirmPassword) {
            $Error = "Password Not Matching in Confirm Password Field";
        } else if (!preg_match("/^[1-9][0-9]{9,9}$/", $MobileNumber)) {
            $Error = "Phone number should be 10 number";
        } else {

            $QueryValidate = "select FirstName from UserTable where EmailAddress='$EmailAddress'";
            $ResultValidate = mysqli_query($Link, $QueryValidate);
            $Row = mysqli_fetch_row($ResultValidate);
            if ($Row) {

                $Error = " This Email Id is already registered";
            } else {
                $Type = "User";
                $Query = "insert into UserTable(FirstName, LastName, EmailAddress, MobileNumber, Password, Type)values('$FirstName','$LastName','$EmailAddress','$MobileNumber','$Password','$Type')";
                $Result = mysqli_query($Link, $Query);
                if (!$Result) {

                    $Error = "Error while registering Try ones again";
                } else {

                    $Message = $FirstName . "Id is successfully registered";
                    require_once('../PHPMailer-master/class.phpmailer.php');
                    include("../PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
                    $Mail = new PHPMailer();
                    $Body = "Your are successfully Registered in formmanagement.com";
                    $Mail->IsSMTP(); // telling the class to use SMTP
                    $Mail->Host = "mail.gmail.com"; // SMTP server
                    $Mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
                    $Mail->SMTPAuth = true;                  // enable SMTP authentication
                    $Mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                    $Mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                    $Mail->Port = 587;                   // set the SMTP port for the GMAIL server
                    $Mail->Username = "pawankumar.s@karmanya.co.in";  // GMAIL username
                    $Mail->Password = "pawan@123";            // GMAIL password
                    $Mail->SetFrom('pawankumar.s@karmanya.co.in', 'Form Management');
                    $Mail->AddReplyTo("pawankumar.s@karmanya.co.in", "Form Management");
                    $Mail->Subject = "Registration Complete";
                    $Mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                    $Mail->MsgHTML($Body);
                    $Address = $EmailAddress;
                    $Mail->AddAddress($Address, $FirstName);
                    if (!$Mail->Send()) {
                        $Error="";
                        $Error.= $Mail->ErrorInfo;
                    }
                }
            }
        }
    }
} else {
    header("Location:../index.php");
}
