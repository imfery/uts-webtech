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


if ($user_status !== 'Belum Terdaftar') {
    header("location: statusvaksinasi.php");
    exit();
}


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
                    <p class="display-3">Daftar Menjadi Peserta Vaksinasi</p>
                </div>
            </div>
        </div>
    </section>

    <section>
    <br><br>
        <div class="container py-4"></div>
        <div class="container py-5">
            <div class="container">
                <form method="POST" action="../includes/vaccineReg_inc.php">
                    <div class="form-group">
                        <label for="address">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nomorhp">Nomor Handphone</label>
                            <input type="text" class="form-control" name="nomorhp" onkeypress='validate(event)' maxlength="15" placeholder="Awali dengan 62 | Contoh: 628788819222" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" onkeypress='validate(event)' minlength="16" maxlength="16" placeholder='16 digit' required>
                        </div>
                    </div><br>
                    <button type="submit" style="display: inline" class="btn btn-primary btn-lg" name="submit" onclick="setTimeout('Redirect()', 5000);">
							Daftar Vaksinasi
                    </button>
                    <span style="float:right"><a style="display: inline" class="btn btn-primary btn-lg" href="statusvaksinasi.php" role="button">Kembali</a></span>
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "error") {
                                    echo "<p style='display: inline; padding-left: 10px; color: red'>Ada yang salah!</p>";
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </section>

</body>

<script>
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

</script>

<?php

include '../includes/footer.php';

?>
</html>