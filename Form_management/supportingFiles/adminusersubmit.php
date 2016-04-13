<?php

include ('connect.php');
session_start();


$id = $_SESSION["id"];

$queryvalidate = "select FirstName from UserTable where type='admin' and Id='$id'";
$resultvalidate = mysqli_query($link, $queryvalidate);
$rowvalidate = mysqli_fetch_row($resultvalidate);
if ($rowvalidate) {

    if (isset($_POST["adminCreateUser"])) {



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

            $error = " This Email Id is already registered";
        } else {
            $type = "User";
            $query = "insert into UserTable(FirstName, LastName, EmailAddress, MobileNumber, Password, type)values('$firstName','$lastName','$emailAddress','$mobileNumber','$password','$type')";
            $result = mysqli_query($link, $query);
            if (!$result) {
                $error = "Error while registering Try ones again";
            } else {
                $message = $firstName . "Id is successfully registered";


                require_once('../PHPMailer-master/class.phpmailer.php');
                include("../PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

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
} else {
    header("Location:../index.php");
}
