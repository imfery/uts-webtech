<?php

if (isset($_POST["submit"])) {
    
    require_once 'db_inc.php';
    require_once 'functions_inc.php';

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password_1 = $_POST["password_1"];
    $password_2 = $_POST["password_2"];

    if (emptyInputSignup($username, $email, $name, $password_1, $password_2) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (passwordMatch($password_1, $password_2) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    if (uidExists($connection, $username, $email) !== false) {
        header("location: ../signup.php?error=usernameoremailtaken");
        exit();
    }

    createUser($connection, $username, $email, $name, $password_1);

} else {
    header("location: ../signup.php");
    exit();
}