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
        <a href="images/pictures/map.png" class="header-title">Map</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="program.php"><i class="fa-solid fa-clock"></i><span><?php echo $lang['FOOTER-PROGRAM'] ?></span></a>
        <a href="plan.php"><i class="fa-solid fa-map"></i></i><span><?php echo $lang['FOOTER-MAP'] ?></span></a>
        <a href="index.php" class="circle-nav active-nav"><i class="fa-solid fa-tree"></i><span><?php echo $lang['FOOTER-HOME'] ?></span></a>
        <a href="talks.php"><i class="fa-solid fa-chalkboard-user"></i><span><?php echo $lang['FOOTER-TALKS'] ?></span></a>
        <a href="job.php"><i class="fa-solid fa-briefcase"></i><span><?php echo $lang['FOOTER-JOB'] ?></span></a>
    </div>

    <div class="page-title page-title-fixed">
        <h1><?php echo $lang['MAP-TITLE'] ?></h1>
        <a href="plan.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="plan.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
    <div class="page-content">
    <div id="page">    

<a href="images/pictures/map.png" data-gallery="gallery-1" class="default-link card card-style bg-6" data-card-height="450" title="HITW2022">

    <div class="card-top">

        <span class="btn btn-m bg-green-dark rounded-sm font-700 scale-box float-end mt-2 me-1"><?php echo $lang['MAP-BUTTON'] ?></span>

    </div>

    <div class="card-bottom">

        <div class="content text-end">
            <h1 class="color-white font-28"><?php echo $lang['MAP-SUBTITLE'] ?></h1>
            <p class="color-white opacity-70">
                <?php echo $lang['MAP-DESCRIPTION'] ?>
            </p>
        </div>
    </div>
    <div class="card-overlay bg-gradient opacity-70"></div>

</a>

</div>
    </div>

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>

</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>