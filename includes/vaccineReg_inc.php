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

$userdata = getUserData($connection, $session_username, false);
$user_username = $userdata["user_username"];

if (isset($_POST["submit"])) {
    $alamat = $_POST["alamat"];
    $gender = $_POST["gender"];
    $nomorhp = $_POST["nomorhp"];
    $nik = $_POST["nik"];

    if (emptyInputVaccine($alamat, $gender, $nomorhp, $nik) !== false) {
        header("location: ../vaksinasi/vaccineReg.php?error=emptyinput");
        exit();
    }
    date_default_timezone_set('Asia/Jakarta');

    $date = new DateTime();
    $currentdate = $date->format('Y-m-d H:i:s');

    daftarVaksinasi($connection, $user_username, $alamat, $gender, $nomorhp, $nik, $currentdate);

} else {
    header("location: ../vaksinasi/statusvaksinasi.php");
    exit();
}