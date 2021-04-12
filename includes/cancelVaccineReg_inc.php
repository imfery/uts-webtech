<?php
session_start();

$session;
$session_username = $_SESSION["username"];
if (isset($session_username)) {
    $session = true;
} else {
    $session = false;
    header("location: login.php");
    exit();
}

require_once 'db_inc.php';
require_once 'functions_inc.php';

$data = getUserData($connection, $session_username, false);
$user_username = $data["user_username"];
$user_status = $data["user_status"];

if ($user_status === 'Belum Terdaftar') {
    header("location: ../vaksinasi/statusvaksinasi.php");
    exit();
} else {
    $sql = "UPDATE users SET status_vaksinasi='0' WHERE username='". $user_username. "'";

    if (mysqli_query($connection, $sql)) {
        header("location: ../vaksinasi/statusvaksinasi.php?cancel=success");
        exit();
    } else {
        header("location: ../vaksinasi/vaccineReg.php?error=error");
        exit();
    }

    mysqli_close($connnection);
}



