<?php 
 include ('connect.php');

if(isset($_POST["submit"])){
$email=$_POST["forgotEmail"];
$query="select FirstName, Password from UserTable where EmailAddress='$email'";
$result=mysqli_query($link, $query);
$row=mysqli_fetch_row($result);
if(!$row){
    $error="This email address is not registered";
}
else{
    
    $message="Passowrd has been sent to your email Id";
 require_once('../PHPMailer-master/class.phpmailer.php');
include("../PHPMailer-master/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
 
$mail             = new PHPMailer();

$body             = "Your Password is: ".$row["1"];

$mail->IsSMTP(); // telling the class to use SMTP

$mail->Host       = "mail.gmail.com"; // SMTP server

$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->SMTPAuth   = true;                  // enable SMTP authentication

$mail->SMTPSecure = "tls";                 // sets the prefix to the servier

$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server

$mail->Port       = 587;                   // set the SMTP port for the GMAIL server

$mail->Username   = "pawankumar.s@karmanya.co.in";  // GMAIL username

$mail->Password   = "pawan@123";            // GMAIL password

 

$mail->SetFrom('pawankumar.s@karmanya.co.in', 'Form Management');
$mail->AddReplyTo("pawankumar.s@karmanya.co.in","Form Management");
$mail->Subject    = "Password";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);
$address = $email;
$mail->AddAddress($address, $email);
if(!$mail->Send()) {

$error.= $mail->ErrorInfo;

}

}
}
?>