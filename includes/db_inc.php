<?php

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = "cleardb_url['host']";
$dbusername = "cleardb_url['user']";
$dbpassword = "cleardb_url['pass']";
$dbname = substr($cleardb_url["path"],1);

$connection = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}