<?php

if (isset($_POST["submit"])) {
    
    require_once 'db_inc.php';
    require_once 'functions_inc.php';

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if (emptyInputLogin($user, $pass) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($connection, $user, $pass);

} else {
    header("location: ../login.php");
    exit();
}