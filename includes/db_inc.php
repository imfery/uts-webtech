<?php

$cleardb_url = parse_url(getenv("mysql://b97e814178ee92:55bc0d1c@us-cdbr-east-03.cleardb.com/heroku_3ac30dbbd60aedf?reconnect=true"));
$servername = "cleardb_url['host']";
$dbusername = "cleardb_url['user']";
$dbpassword = "cleardb_url['pass']";
$dbname = substr($cleardb_url["path"],1);

$connection = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}