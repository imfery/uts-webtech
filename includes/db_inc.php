<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "uts_vaksinasi";

$connection = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}