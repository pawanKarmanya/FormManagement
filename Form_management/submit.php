<?php

include ('supportingFiles/connect.php');
session_start();

if (isset($_SESSION["id"])) {

    $ValidateLogoutQuery = "select Type from UserTable where Id='" . $_SESSION["id"] . "'";
    $ValidateLogoutResult = mysqli_query($Link, $ValidateLogoutQuery);
    $ValidateLogoutRow = mysqli_fetch_row($ValidateLogoutResult);
    if ($ValidateLogoutRow[0] == "User") {
        header("Location:supportingFiles/userLoginSuccess.php");
    }
    if ($ValidateLogoutRow[0] == "admin") {
        header("Location:supportingFiles/adminLoginSuccess.php");
    }
}
if (isset($_POST["submitSignUp"])) {

    $FirstName = $_POST["firstName"];
    $LastName = $_POST["lastName"];
    $EmailAddress = $_POST["emailAddress"];
    $Password = $_POST["password"];
    $ConfirmPassword = $_POST["confirmPassword"];
    $MobileNumber = $_POST["mobileNumber"];
    if (!preg_match("/^[a-zA-Z ]*$/", $FirstName)) {
        $Error = "Characters and white space is allowed in First Name";
    }
    else if (!preg_match("/^[a-zA-Z ]*$/", $LastName)) {
        $Error = "Characters and white space is allowed in Last Name";
    }
    else if (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) {
        $Error = "Invalid Email Address";
    }
    else if($Password!=$ConfirmPassword){
        $Error="Password not matching in confirm password field";
    }
    else if(!preg_match("/^[1-9][0-9]{9,9}$/", $MobileNumber)){
        $Error="Phone number should be 10 number";
    }
    else{
    $QueryValidate = "select FirstName from UserTable where EmailAddress='$EmailAddress'";
    $ResultValidate = mysqli_query($Link, $QueryValidate);
    $Row = mysqli_fetch_row($ResultValidate);
    if ($Row) {

        $Error = $Row[0] . " Your Email Id is already registered";
    } else {
        $Type = "User";
        $Query = "insert into UserTable(FirstName, LastName, EmailAddress, MobileNumber, Password, Type)values('$FirstName','$LastName','$EmailAddress','$MobileNumber','$Password','$Type')";
        $Result = mysqli_query($Link, $Query);
        if (!$Result) {
            $Error = "Error while registering Try ones again";
        } else {

            $Message = $FirstName . " you are successfully registered please login";
            require_once('PHPMailer-master/class.phpmailer.php');
            include("PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
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

                $Error.= $Mail->ErrorInfo;
                $Error.="Mail could not be sent";
            }
        }
    }
}}
if (isset($_POST["loginSubmit"])) {

    $UserEmail = $_POST["userEmail"];
    $UserPassword = $_POST["userPassword"];
    $QueryUserLogIn = "select Id from UserTable where EmailAddress='$UserEmail' and Password='$UserPassword'";
    $ResultUserLogIn = mysqli_query($Link, $QueryUserLogIn);
    $RowUserLogIn = mysqli_fetch_row($ResultUserLogIn);
    if (!$RowUserLogIn) {

        $Error = "Invalid Email and password";
    } else {

        $_SESSION["id"] = $RowUserLogIn[0];
        header("Location:supportingFiles/userLoginSuccess.php");
    }
}
if (isset($_POST["adminLogIn"])) {

    $AdminEmail = $_POST["adminEmail"];
    $AdminPassword = $_POST["adminPassword"];
    $QueryAdminLogIn = "select Id from UserTable where EmailAddress='$AdminEmail' and Password='$AdminPassword'";
    $ResultAdminLogIn = mysqli_query($Link, $QueryAdminLogIn);
    $RowAdminLogIn = mysqli_fetch_row($ResultAdminLogIn);

    if (!$RowAdminLogIn) {

        $Error = "Invalid Email and password";
    } else {

        $_SESSION["id"] = $RowAdminLogIn[0];
        header("Location:supportingFiles/adminLoginSuccess.php");
    }
}
?>