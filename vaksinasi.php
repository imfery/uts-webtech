<html lang="en">
<?php

$title = "Vaksinasi | Covid-19 Jakarta";
$css = true;
$root = '.';
$closeconnectionsettings = true;
$additionalheader = false;
$cssheader = './css/header.css';
$cssref = "./css/vaksinasi.css";
include './includes/header.php';

?>
<body>
    <?php
    $active = "vaksinasi";
    include './includes/navigation.php'; 
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
                    <p class="display-3">Vaksinasi</p>
                </div>
            </div>
        </div>
    </section>
    <div class="d-none d-lg-block py-5"></div>
    <div class="container py-4"></div>
    <section>
        <div class="container py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Peserta Vaksinasi</h5>
                            <p class="card-text">Masyarakat yang telah mendaftar menjadi peserta vaksinasi melalui website ini akan terlihat di halaman ini.</p>
                            <a href="./vaksinasi/daftarvaksinasi.php" class="btn btn-primary">Lihat</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Status Vaksinasi Anda</h5>
                            <p class="card-text">Periksa status vaksinasi COVID-19 Anda disini. Apabila Anda belum menjadi peserta, Anda juga bisa mendaftar melalui halaman ini.</p>
                            <a href="./vaksinasi/statusvaksinasi.php" class="btn btn-primary">Lihat</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php

include './includes/footer.php';

?>
</html>