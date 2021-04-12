<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <span>Halo <?php echo "<b>"; echo $user_fullname; echo "</b>"; echo " ("; echo $user_username; echo ")"; ?>!</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                    $current = false;
                    if ($active==='index') {
                        $current = true;
                        echo "<li class='nav-item active'>";
                    } else {
                        $current = false;
                        echo "<li class='nav-item'>";
                    }
                    echo "<a class='nav-link' href='$root/index.php'>Beranda";
                    if ($current) {
                        echo "<span class='sr-only'>(current)</span>";
                    }
                    echo "</a>";
                    echo "</li>";
                ?>
                <?php
                    $current = false;
                    if ($active==='vaksinasi') {
                        $current = true;
                        echo "<li class='nav-item active'>";
                    } else {
                        $current = false;
                        echo "<li class='nav-item'>";
                    }
                    echo "<a class='nav-link' href='$root/vaksinasi.php'>Vaksinasi";
                    if ($current) {
                        echo "<span class='sr-only'>(current)</span>";
                    }
                    echo "</a>";
                    echo "</li>";
                ?>
                <li>
                    <a href="<?php echo $root;?>/includes/logout_inc.php" class="btn btn-info btn-lg">
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>