<html lang="en">
<?php

$title = "Vaksinasi | Covid-19 Jakarta";
$css = true;
$root = '..';
$closeconnectionsettings = true;
$additionalheader = false;
$additionalheader = false;
// $headers = array(
// );
$closeconnectionsettings = false;
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
                    <p class="display-3">Daftar Peserta Vaksinasi</p>
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
            <a class="btn btn-primary btn-lg" href="../vaksinasi.php" role="button">Kembali</a>
            <br><br>
                <div>
                <table id='vaccineTable' class='table'>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>NIK</th>
                            <th>Waktu Pendaftaran</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php generateTable($connection); ?>
                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </section>


</body>

<?php

include '../includes/footer.php';

?>

</html>