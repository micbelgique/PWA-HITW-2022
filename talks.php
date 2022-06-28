<?php
    include "config.php";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>HITW - App Compagnon</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="index.php" class="header-title">Talks</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="program.php"><i class="fa-solid fa-clock"></i><span><?php echo $lang['FOOTER-PROGRAM'] ?></span></a>
        <a href="images/pictures/map.png"><i class="fa-solid fa-map"></i></i><span><?php echo $lang['FOOTER-MAP'] ?></span></a>
        <a href="index.php" class="circle-nav active-nav"><i class="fa-solid fa-tree"></i><span><?php echo $lang['FOOTER-HOME'] ?></span></a>
        <a href="talks.php"><i class="fa-solid fa-chalkboard-user"></i><span><?php echo $lang['FOOTER-TALKS'] ?></span></a>
        <a href="job.php"><i class="fa-solid fa-briefcase"></i><span><?php echo $lang['FOOTER-JOB'] ?></span></a>
    </div>

    <div class="page-title page-title-fixed">
        <h1>Talks</h1>
        <a href="talks.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="talks.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
    <div class="page-content">
        <h1 style="text-align:center"><i class="fa-solid fa-arrow-right-arrow-left"></i></h1>
        <div class="splide single-slider slider-no-arrows slider-no-dots" id="single-slider-2">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card card-style ">
                            <div class="content mb-0">                       
                                <p class="mb-n1 color-highlight font-600"><?php echo $lang['TALKS-DAY-ONE-TITLE'] ?></p>
                                <h1 class="font-26 font-800"><?php echo $lang['TALKS-DAY-ONE-DESCRIPTION'] ?></h1>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-ONE-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-ONE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-ONE-DESCRIPTION'] ?></p>
                                    
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/fred150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-TWO-TITLE'] ?></h5>EN
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-TWO-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-TWO-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/olivier150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-THREE-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-THREE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-THREE-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/damien150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-FOUR-TITLE'] ?></h5>EN
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-FOUR-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-FOUR-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/nick150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-FIVE-TITLE'] ?></h5>EN
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-FIVE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-FIVE-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                         <img src="images/pictures/cedric.jpg" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-SIX-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-SIX-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-SIX-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/loic150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-SEVEN-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-SEVEN-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-SEVEN-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/davidionut150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-ONE-CARD-EIGHT-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-ONE-CARD-EIGHT-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-ONE-CARD-EIGHT-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/eloi150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style">
                            <div class="content mb-0">                       
                                <p class="mb-n1 color-highlight font-600"><?php echo $lang['TALKS-DAY-TWO-TITLE'] ?></p>
                                <h1 class="font-26 font-800"><?php echo $lang['TALKS-DAY-TWO-DESCRIPTION'] ?></h1>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-ONE-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-ONE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-ONE-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/orlando.jpg" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-TWO-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-TWO-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-TWO-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/adrien.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-THREE-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-THREE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-THREE-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/serge.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-FOUR-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-FOUR-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-FOUR-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/mathieu2.jpg" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-FIVE-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-FIVE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-FIVE-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/marc.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-SIX-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-SIX-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-SIX-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/click.jpg" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-SEVEN-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-SEVEN-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-SEVEN-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/patrick+fred150x150.png" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-EIGHT-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-EIGHT-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-EIGHT-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/jeremy.jpg" class="rounded-sm" width="100">
                                    </div>
                                </a>
                                <!-- <a href="#" class="d-flex">
                                    <div class="me-auto">
                                        <h5 class="font-600 pt-2"><?php echo $lang['TALKS-DAY-TWO-CARD-NINE-TITLE'] ?></h5>FR
                                        <span class="color-highlight opacity-60"><?php echo $lang['TALKS-DAY-TWO-CARD-NINE-NAME'] ?></span>
                                        <p><?php echo $lang['TALKS-DAY-TWO-CARD-NINE-DESCRIPTION'] ?></p>
                                    </div>
                                    <div class="ms-4 mb-4">
                                        <img src="images/pictures/8s.jpg" class="rounded-sm" width="100">
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>

</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>