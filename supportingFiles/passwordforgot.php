<?php

include ('connect.php');

if (isset($_POST["submit"])) {
    $Email = $_POST["forgotEmail"];
    $Query = "select FirstName, Password from UserTable where EmailAddress='$Email'";
    $Result = mysqli_query($Link, $Query);
    $Row = mysqli_fetch_row($Result);
    if (!$Row) {
        $Error = "This email address is not registered";
    } else {

        $Message = $Row["0"]." Your Password has been sent to your email Id";
        require_once('../PHPMailer-master/class.phpmailer.php');
        include("../PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
        $Mail = new PHPMailer();
        $Body = "Your Password is: " . $Row["1"];
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
        $Mail->Subject = "Password";
        $Mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $Mail->MsgHTML($Body);
        $Address = $Email;
        $Mail->AddAddress($Address, $Email);
        if (!$Mail->Send()) {

            $Error.= $Mail->ErrorInfo;
        }
    }
}
?>