<?php
require 'dbh.inc.php';

if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $passwordReapeat = $_POST['pwd-repeat'];

    $query = "INSERT INTO users  VALUES(NULL, '$username', '$email', '$password');";

    mysqli_query($conn, $query);

    header("location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
}

    // if (empty($username) || empty($email) || empty($password) || empty($passwordReapeat)) {

    //     $query = "INSERT INTO users (idUsers, uidUsers, emailUsers, pwdUsers) VALUES(NULL, '$username', '$email', '$password');";

    //     if (mysqli_query($conn, $query)) {
    //         echo "ok";
    //     } else {
    //         echo "not ok";
    //     }
    //     // header("location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
    //     exit();
    // } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header("location: ../signup.php?error=invalidmail&uid=" . $username);
    //     exit();
    // }
// }