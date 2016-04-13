<?php

$emailAddress = $_POST["email"];
session_start();
$_SESSION["email"] = $emailAddress;
?>