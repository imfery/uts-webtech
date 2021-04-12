<html lang="en">
<?php

$title = "Vaksinasi | Covid-19 Jakarta";
$css = true;
$root = '..';
$closeconnectionsettings = true;
$additionalheader = false;
$cssheader = '../css/header.css';
$cssref = "../css/vaksinasi.css";
include '../includes/header.php';

?>
<body>
    <?php
    $active = "vaksinasi";
    include '../includes/navigation.php'; 
    ?>

    <section>
        <div class="container-lg">
            <div class="background-home"></div> 
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="d-none d-lg-block py-3"></div>
            <div class="row py-5" style="position: relative;">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <p class="display-3">Status Vaksinasi</p>
                </div>
                <div class="col-md-2"></div>
                <br><br><br><br>
            </div>
        </div>
    </section>
    <div class="d-none d-lg-block py-5"></div>
    <section>
        <div class="container py-5">
            <div class="container">
                <div class="text-left">
                    <table>
                        <tbody>
                            <tr>
                                <td><h1 class="font-bold text-uppercase"><?php echo $user_fullname?></h1></td>
                            </tr>
                            <tr>
                                <td><h5>Email/Username</h5></td>
                                <td><h5>&ensp;:&emsp;<?php echo $user_email; echo "/"; echo $user_username?></h5></td>
                            </tr>
                            <?php 

                            if ($user_status!=='Belum Terdaftar') {


                                echo "<tr>";
                                echo "<td><h5>Alamat</h5></td>";
                                echo "<td><h5>&ensp;:&emsp;$user_address</h5></td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td><h5>Jenis Kelamin</h5></td>";
                                echo "<td><h5>&ensp;:&emsp;$user_gender</h5></td>";
                                echo "</tr>";
                                echo "<tr>";

                                echo "<td><h5>Nomor HP</h5></td>";
                                echo "<td><h5>&ensp;:&emsp;$user_nomorhp</h5></td>";
                                echo "</tr>";

                                echo "<td><h5>NIK</h5></td>";
                                echo "<td><h5>&ensp;:&emsp;$user_nik</h5></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                            <tr>
                                <td><h5 style="display: inline-block">Status Vaksinasi</h5></td>
                                <td><h5 style="display: inline-block; color:black">&ensp;:</h5><h5 style="display: inline-block" class="<?php if ($user_status!=='Terdaftar') {echo 'text-danger';} else {echo 'text-success';};?>">&emsp;<?php echo $user_status ?></h5></td>
                            </tr>
                            
                            <?php
                            
                            if ($user_status!=='Belum Terdaftar') {
                                echo "<td><h5>Waktu Pendaftaran</h5></td>";
                                echo "<td><h5>&ensp;:&emsp;$user_vaccineregdate</h5></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                            
                        </tbody>
                    </table>
                    <hr>
                    <p class="pb-5">
                    <?php
                        if ($user_status!=='Terdaftar') {
                            echo 'Maaf, Anda belum terdaftar untuk menjadi peserta vaksinasi COVID-19. Silahkan daftar terlebih dahulu.';
                        } else {
                            echo 'Anda sudah terdaftar menjadi peserta vaksinasi COVID-19.';
                        }           
                    ?></p>
                    
                    <?php
                        if ($user_status!=='Terdaftar') {
                            echo '<a style="display: inline" class="btn btn-primary btn-lg" href="vaccineReg.php" role="button">Daftar Vaksinasi</a>';
                        } else {
                            echo '<a style="display: inline" class="btn btn-primary btn-lg" href="../includes/cancelVaccineReg_inc.php" role="button">Batalkan Pendaftaran</a>';
                        }
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "none") {
                                echo "<p style='display:inline; color: green; padding-left: 10px;'>Pendaftaran berhasil!</p>";
                            } else if ($_GET["error"] == "error") {  
                                echo "<p style='display: inline; padding-left: 10px; color: red'>Ada yang salah!</p>";
                            } 
                        } else if (isset($_GET["cancel"])) {
                            if ($_GET["cancel"] == "success") {
                                echo "<p style='display: inline; padding-left: 10px; color: red'>Pembatalan berhasil!</p>";
                            }
                        }
                    ?>
                    <span style="float:right"><a style="display: inline" class="btn btn-primary btn-lg" href="../vaksinasi.php" role="button">Kembali</a></span>
                </div>
            </div>
        </div>
    </section>

</body>

<?php

include '../includes/footer.php';

?>
</html>