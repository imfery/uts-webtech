<?php

function emptyInputSignup($username, $email, $name, $password_1, $password_2) {
    $result;
    if (empty($name) || empty($username) || empty($email) || empty($password_1) || empty($password_2)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password_1, $password_2) {
    $result;
    if ($password_1 !== $password_2) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($connection, $username, $email) {
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($connection, $username, $email, $name, $password_1) {
    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `fullname`, `password`, `created_at`)
    VALUES (NULL, ?, ?, ?, ?, current_timestamp());";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $password = password_hash($password_1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $name, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($connection, $username, $password) {
    $uidExists = uidExists($connection, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $uidExists["password"];
    $checkpassword = password_verify($password, $passwordHashed);

    if ($checkpassword === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } 
    else if ($checkpassword === true) {
        session_start();
        $_SESSION["id"] = $uidExists["id"];
        $_SESSION["username"] = $uidExists["username"];
        header("location: ../index.php");
        exit();
    }

}

function getUserData($connection, $session_username, $closeConnection = true) {
    
    $sql = "SELECT * FROM `users` WHERE username='". $session_username. "'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $user_id = $row["id"];
            $user_username = $row["username"];
            $user_email = $row["email"];
            $user_fullname = $row["fullname"];
            $user_status = $row["status_vaksinasi"];
            $user_address = $row["alamat"];
            $user_gender = $row["gender"];
            $user_nomorhp = $row["nomorhp"];
            $user_nik = $row["nik"];
            $user_vaccineregdate = $row["vaccineregdate"];
        }
    }

    if ($user_status === '0') {
        $user_status = 'Belum Terdaftar';
    } else {
        $user_status = 'Terdaftar';
    }

    if ($closeConnection) {
        mysqli_close($connection);
    }

    return array(
        'user_id' => $user_id,
        'user_username' => $user_username,
        'user_email' => $user_email,
        'user_fullname' => $user_fullname,
        'user_status' => $user_status,
        'user_address' => $user_address,
        'user_gender' => $user_gender,
        'user_nomorhp' => $user_nomorhp,
        'user_nik' => $user_nik,
        'user_vaccineregdate' => $user_vaccineregdate,
    );
}

function emptyInputVaccine($alamat, $gender, $nohp, $nik) {
    $result;
    if (empty($alamat) || empty($gender) || empty($nohp) || empty($nik)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function daftarVaksinasi($connection, $user_username, $alamat, $gender, $nohp, $nik, $date, $closeConnection=true) {

    $sql = "UPDATE `users` SET `status_vaksinasi`='1', `alamat`='". $alamat. "', `gender`='". $gender. "', `nomorhp`='". $nohp. "', `nik`='". $nik. "', `vaccineregdate` ='". $date. "' WHERE `username`= '". $user_username. "' ";
    if (mysqli_query($connection, $sql)) {
        header("location: ../vaksinasi/statusvaksinasi.php?error=none");
        exit();
    } else {
        header("location: ../vaksinasi/vaccineReg.php?error=error");
        exit();
    }

    if ($closeConnection) {
        mysqli_close($connection);
    }

    exit();

}

function generateTable($connection) {

    $sql = "SELECT fullname, gender, nik, vaccineregdate FROM users WHERE status_vaksinasi = '1' ";
    if ($result = mysqli_query($connection, $sql)) {
        
        while ($row = mysqli_fetch_assoc($result)) {

            $name_length = strlen($row["fullname"]);
            $fullname = substr_replace($row['fullname'], str_repeat("*", ceil($name_length/3)), -ceil($name_length/3));
            $gender = $row["gender"];
            $nik = substr_replace($row['nik'], str_repeat("*", 6), -6);
            $vaccineregdate = $row["vaccineregdate"];

            echo "<tr>";
            echo "<td>"; echo $fullname; echo "</td>";
            echo "<td>"; echo $gender; echo "</td>";
            echo "<td>"; echo $nik; echo "</td>";
            echo "<td>"; echo $vaccineregdate; echo "</td>";
            echo "</tr>";

        }

    } else {
        header("location: ../vaksinasi/daftarvaksinasi.php?error=errorGeneratingTable");
        exit();
    }
}