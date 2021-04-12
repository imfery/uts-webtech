<?php
session_start();

$session;
$session_username = $_SESSION["username"];
if (isset($session_username)) {
    $session = true;
} else {
    $session = false;
    header("location: ../login.php");
}

require_once 'db_inc.php';
require_once 'functions_inc.php';

if (!$closeconnectionsettings) {
    $data = getUserData($connection, $session_username, $closeconnectionsettings);
} else {
    $data = getUserData($connection, $session_username);
}

$user_id = $data["user_id"];
$user_username = $data["user_username"];
$user_email = $data["user_email"];
$user_fullname = $data["user_fullname"];
$user_status = $data["user_status"];
$user_address = $data["user_address"];
$user_gender = $data["user_gender"];
$user_nomorhp = $data["user_nomorhp"];
$user_nik = $data["user_nik"];
$user_vaccineregdate = $data["user_vaccineregdate"];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $cssheader;?>">
    <link rel="stylesheet" href="<?php if ($css) {echo $cssref;};?>">

    <?php
    
    if ($additionalheader) {
        for ($i=0; $i < count($headers); $i++) { 
            echo $headers[$i];
        }
    }
    
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <title><?php echo $title;?></title>
</head>