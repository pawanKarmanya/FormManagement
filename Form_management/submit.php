<?php

include ('supportingFiles/connect.php');
session_start();

if (isset($_SESSION["id"])) {
    $notLogoutQuery = "select type from UserTable where Id='" . $_SESSION["id"] . "'";
    $notLogoutResult = mysqli_query($link, $notLogoutQuery);
    $notLogoutRow = mysqli_fetch_row($notLogoutResult);
    if ($notLogoutRow[0] == "User") {
        header("Location:supportingFiles/userLoginSuccess.php");
    }
    if ($notLogoutRow[0] == "admin") {
        header("Location:supportingFiles/adminLoginSuccess.php");
    }
}



if (isset($_POST["submitSignUp"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $mobileNumber = $_POST["mobileNumber"];
    $queryvalidate = "select FirstName from UserTable where EmailAddress='$emailAddress'";
    $resultvalidate = mysqli_query($link, $queryvalidate);
    $row = mysqli_fetch_row($resultvalidate);
    if ($row) {

        $error = $row[0] . " Your Email Id is already registered";
    } else {
        $type = "User";
        $query = "insert into UserTable(FirstName, LastName, EmailAddress, MobileNumber, Password, type)values('$firstName','$lastName','$emailAddress','$mobileNumber','$password','$type')";
        $result = mysqli_query($link, $query);
        if (!$result) {
            $error = "Error while registering Try ones again";
        } else {
            $message = $firstName . " you are successfully registered please login";


            require_once('PHPMailer-master/class.phpmailer.php');
            include("PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

            $mail = new PHPMailer();

            $body = "Your are successfully Registered in formmanagement.com";

            $mail->IsSMTP(); // telling the class to use SMTP

            $mail->Host = "mail.gmail.com"; // SMTP server

            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)

            $mail->SMTPAuth = true;                  // enable SMTP authentication

            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier

            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server

            $mail->Port = 587;                   // set the SMTP port for the GMAIL server

            $mail->Username = "pawankumar.s@karmanya.co.in";  // GMAIL username

            $mail->Password = "pawan@123";            // GMAIL password



            $mail->SetFrom('pawankumar.s@karmanya.co.in', 'Form Management');
            $mail->AddReplyTo("pawankumar.s@karmanya.co.in", "Form Management");
            $mail->Subject = "Registration Complete";
            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mail->MsgHTML($body);
            $address = $emailAddress;
            $mail->AddAddress($address, $firstName);
            if (!$mail->Send()) {

                $error.= $mail->ErrorInfo;
            }
        }
    }
}
if (isset($_POST["loginSubmit"])) {
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    $queryUserLogIn = "select Id from UserTable where EmailAddress='$userEmail' and Password='$userPassword'";
    $resultUserLogIn = mysqli_query($link, $queryUserLogIn);
    $rowUserLogIn = mysqli_fetch_row($resultUserLogIn);
    if (!$rowUserLogIn) {
        $error = "Invalid Email and password";
    } else {


        $_SESSION["id"] = $rowUserLogIn[0];
        header("Location:supportingFiles/userLoginSuccess.php");
    }
}


if (isset($_POST["adminLogIn"])) {
    $adminEmail = $_POST["adminEmail"];
    $adminPassword = $_POST["adminPassword"];

    $queryAdminLogIn = "select Id from UserTable where EmailAddress='$adminEmail' and Password='$adminPassword'";
    $resultAdminLogIn = mysqli_query($link, $queryAdminLogIn);
    $rowAdminLogIn = mysqli_fetch_row($resultAdminLogIn);
    if (!$rowAdminLogIn) {
        $error = "Invalid Email and password";
    } else {


        $_SESSION["id"] = $rowAdminLogIn[0];
        header("Location:supportingFiles/adminLoginSuccess.php");
    }
}
?>