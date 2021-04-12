<?php
    session_start();

    if (isset($_SESSION["username"])) {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>COVID-19 Jakarta | Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="./images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="includes/signup_inc.php">
					<span class="login100-form-title">
						Buat Akun
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Nama Lengkap diperlukan">
						<input class="input100" type="text" name="name" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Username dibutuhkan">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email harus valid: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password dibutuhkan">
						<input class="input100" type="password" name="password_1" placeholder="Password" minlength="6" maxlength="20">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ulangi password dibutuhkan">
						<input class="input100" type="password" name="password_2" placeholder="Ulangi Password" minlength="6" maxlength="20">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit">
							Selesai
						</button>

                        <?php

                        if(isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p style='color: red'>Fill in all fields!</p>";
                            }

                            else if ($_GET["error"] == "invalidusername") {
                                echo "<p style='color: red'>Choose a proper username!</p>";
                            }

                            else if ($_GET["error"] == "invalidemail") {
                                echo "<p style='color: red'>Choose a proper email!</p>";
                            }

                            else if ($_GET["error"] == "passwordsdontmatch") {
                                echo "<p style='color: red'>Passwords doesn't match!</p>";
                            }

                            else if ($_GET["error"] == "usernameoremailtaken") {
                                echo "<p style='color: red'>Username or Email has been taken!</p>";
                            }

                            else if ($_GET["error"] == "stmtfailed") {
                                echo "<p style='color: red'>Something is wrong!</p>";
                            }

                            else if ($_GET["error"] == "none") {
                                echo "<p style='color: green'>Registration successful!</p>";
                            }
                        }

                    ?>
					</div>

                    

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Sudah memiliki akun? Masuk
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>
</html>