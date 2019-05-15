<?php
require "dbh.inc.php";
session_start();
if (isset($_POST['login-submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $wasse3 = "SELECT COUNT(*) AS C FROM users WHERE uidUsers = '$username' AND pwdUsers = '$password';";

    $result = mysqli_query($conn, $wasse3);
    $count = mysqli_fetch_assoc($result);

    if ($count['C'] == 1) {
        $_SESSION['userId'] =  "lwasse3";
        header("location: ./profile.php");
    }
    // else {
    //     header("Location: ./notallowed.php");
    //     echo 'test';
    // }
}