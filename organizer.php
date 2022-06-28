<?php
    include "config.php";
?>
<!DOCTYPE HTML>
<html lang="fr">
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
    
    <div class="header header-fixed header-logo-left header-auto-show">
        <a href="partners.php" class="header-title">HITW</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
    </div>
    
    <div id="footer-bar" class="footer-bar-6">
        <a href="program.php"><i class="fa-solid fa-clock"></i><span><?php echo $lang['FOOTER-PROGRAM'] ?></span></a>
        <a href="images/pictures/map.png"><i class="fa-solid fa-map"></i></i><span><?php echo $lang['FOOTER-MAP'] ?></span></a>
        <a href="index.php" class="circle-nav active-nav"><i class="fa-solid fa-tree"></i><span><?php echo $lang['FOOTER-HOME'] ?></span></a>
        <a href="talks.php"><i class="fa-solid fa-chalkboard-user"></i><span><?php echo $lang['FOOTER-TALKS'] ?></span></a>
        <a href="job.php"><i class="fa-solid fa-briefcase"></i><span><?php echo $lang['FOOTER-JOB'] ?></span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <h1><?php echo $lang['ORGANISATION-BIG-TITLE'] ?></h1>
        <a href="organizer.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="organizer.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
    <div id="translator_5480">

      
    <div class="page-content">

        <div class="card rounded-0 bg-mic" data-card-height="450">
        
        </div>


        <div class="card card-style" style="margin-top:-60px; z-index:1">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="https://www.facebook.com/MICBelgique/" class="icon-xl text-center"><i class="fab fa-facebook-f font-14 color-facebook"></i></a>
                </div>
                <div>
                    <a href="https://twitter.com/micbelgique?lang=fr" class="icon-xl text-center"><i class="fab fa-twitter font-14 color-twitter"></i></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/micbelgique/" class="icon-xl text-center"><i class="fa-brands fa-instagram font-14 color-instagram"></i></a>
                </div>
                <div>
                    <a href="https://www.twitch.tv/micbelgique" class="icon-xl text-center"><i class="fa-brands fa-twitch font-14 color-twitch"></i></a>
                </div>
                <div>
                    <a href="https://www.meetup.com/fr-FR/micbelgique/?_cookie-check=gHMAcC3siV0WNftV" class="icon-xl text-center"><i class="fa-brands fa-meetup font-14 color-meetup"></i></a>
                </div>
                <div>
                    <a href="https://www.linkedin.com/company/micbelgique/?originalSubdomain=fr" class="shareToLinkedIn icon-xl text-center"><i class="fab fa-linkedin-in font-14 color-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <p class="mb-n1 color-highlight font-600"><?php echo $lang['ORGANISATION-SUBTITLE'] ?></p>
                <h1>
                <?php echo $lang['ORGANISATION-TITLE'] ?>
                </h1>
                <p>
                <?php echo $lang['ORGANISATION-DESCRIPTION-ONE'] ?>
                </p>
                <p>
                <?php echo $lang['ORGANISATION-DESCRIPTION-TWO'] ?>
                </p>
            </div>
        </div>
        <div class="card card-style bg-newsletter" data-card-height="100">
            <div class="card-center px-3 no-click">
                <h1 class="color-white mb-n2 font-24"></h1>
                <h5 class="color-white mt-n1 opacity-80 font-14"></h5>
            </div>
            <div class="card-center">
                <a href="https://mic-belgique.us12.list-manage.com/subscribe?u=9d8cfc7860748743eded2118c&id=b307dacba3" class="float-end mx-3 gradient-highlight btn-s rounded-sm shadow-xl text-uppercase font-800"><?php echo $lang['HOME-CARD-NEWSLETTER-BUTTON'] ?></a>
            </div>
            <div class="card-overlay bg-black opacity-10"></div>
        </div>

    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>
</div>

<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
