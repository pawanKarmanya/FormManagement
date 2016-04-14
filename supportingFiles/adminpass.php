<?php

$EmailAddress = $_POST["email"];
session_start();
$_SESSION["email"] = $EmailAddress;
?>