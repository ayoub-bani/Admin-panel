<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "login_system";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}