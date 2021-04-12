<html lang="en">
<?php 

$title = "Beranda | Covid-19 Jakarta";
$css = true;
$root = '.';
$closeconnectionsettings = true;
$additionalheader = false;
$cssheader = './css/header.css';
$cssref = "./css/home.css";
include './includes/header.php';

?>

<body>
    <?php
        $active = "index";
        include './includes/navigation.php'; 
    ?>

    <section>
        <div class="container-lg">
            <div class="background-home"></div> 
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="d-none d-lg-block py-5"></div>
            <div class="d-none d-lg-block py-3"></div>
            <div class="row py-5" style="position: relative;">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <p class="display-3">COVID-19 JAKARTA</p>
                    <p class="display-4">Sudahkah Anda menjadi bagian program vaksinasi COVID-19 di Jakarta?</p>
                    <a class="btn btn-primary btn-lg" href="vaksinasi.php" role="button">Periksa Status Vaksinasi Sekarang</a>
                </div>
            <div class="col-md-2"></div>
        </div>
        <div class="d-none d-lg-block py-5"></div>
        <div class="container py-5">
            <div class="d-flex justify-content-around py-3" style="position: relative;">
                <div></div>
                <div></div>
                <div></div>
                <div></div>                
            </div>
            <div class="card card-shadow my-3 py-3" style="color: #000;border-radius:20px;">
                <div class='tableauPlaceholder' id='viz1617877165185' style='position: absolute'>
                    <noscript>
                        <a href='#'>
                            <img alt='Dashboard Widget ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;La&#47;LandingPageCovid-19Jakarta2&#47;DashboardWidget&#47;1_rss.png' style='border: none' />
                        </a>
                    </noscript>
                    <object class='tableauViz'  style='display:none;'>
                        <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                        <param name='embed_code_version' value='3' />
                        <param name='site_root' value='' />
                        <param name='name' value='LandingPageCovid-19Jakarta2&#47;DashboardWidget' />
                        <param name='tabs' value='no' />
                        <param name='toolbar' value='no' />
                        <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;La&#47;LandingPageCovid-19Jakarta2&#47;DashboardWidget&#47;1.png' />
                        <param name='animate_transition' value='yes' />
                        <param name='display_static_image' value='yes' />
                        <param name='display_spinner' value='yes' />
                        <param name='display_overlay' value='yes' />
                        <param name='display_count' value='yes' />
                    </object>
                </div>
            </div>
        </div>

    </section>

<script type='text/javascript'>

    var divElement = document.getElementById('viz1617877165185');
    var vizElement = divElement.getElementsByTagName('object')[0];
    if ( divElement.offsetWidth > 800 ) {
        vizElement.style.width='1020px';vizElement.style.height='3200px';
    } 
    else if ( divElement.offsetWidth > 500 ) {
        vizElement.style.width='1020px';vizElement.style.height='3200px';
    } 
    else {
        vizElement.style.width='100%';vizElement.style.height='7000px';
    }

    var scriptElement = document.createElement('script');
    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
    vizElement.parentNode.insertBefore(scriptElement, vizElement);

</script>
    
</body>

<?php

include './includes/footer.php';

?>
</html>