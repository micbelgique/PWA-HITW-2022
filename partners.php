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
        <a href="partners.php" class="header-title"><?php echo $lang['PARTNERS-TITLE'] ?></a>
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
        <h1><?php echo $lang['PARTNERS-TITLE'] ?></h1>
        <a href="plan.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="plan.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
    <div class="page-content">
    <div class="content mb-0">
    <div class="row mb-0">
   
        <div class="col-6">
        <a href="https://www.microsoft.com/fr-be/">
            <div class="card mx-0 card-style bg-microsoft" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://www.proximus.be/fr/id_personal/particuliers.html">
            <div class="card mx-0 card-style bg-proximus" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://www.digitalwallonia.be/fr">
            <div class="card mx-0 card-style bg-wallonia" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://www.wallonie.be/fr">
        <div class="card mx-0 card-style bg-wallonie" data-card-height="200"></div>    
        </a>
        </div>
        <div class="divider divider-margins mt-3 mb-5"></div>
        <div class="col-6">
        <a href="https://www.cera.coop/fr/particuliers">
            <div class="card mx-0 card-style bg-cera" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://technocite.be/">
            <div class="card mx-0 card-style bg-technocite" data-card-height="200"></div>    
        </a>
        </div>
        <div class="divider divider-margins mt-3 mb-5"></div>
        <div class="col-6">
        <a href="https://www.enmieux.be/">
            <div class="card mx-0 card-style bg-campus" data-card-height="200"></div>  
        </a>  
        </div>

        <div class="col-6">
        <a href="https://www.idea.be/fr/accueil.html">
            <div class="card mx-0 card-style bg-idea" data-card-height="200"></div>    
        </a>
        </div>
        <div class="divider divider-margins mt-3 mb-5"></div>

        <div class="col-6">
        <a href="https://www.accenture.com/be-en">
            <div class="card mx-0 card-style bg-accenture" data-card-height="200"> </div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://www.alstom.com/fr">
            <div class="card mx-0 card-style bg-alstom" data-card-height="200"></div> 
        </a>
        </div>

        <div class="col-6">
        <a href="https://cronos-groep.be/fr/">
            <div class="card mx-0 card-style bg-cronos" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://www.delaware.pro/fr-be">
            <div class="card mx-0 card-style bg-delaware" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://oniryx.be/">
            <div class="card mx-0 card-style bg-oniryx" data-card-height="200"></div>   
        </a> 
        </div>
        <div class="divider divider-margins mt-3 mb-5"></div>
        <div class="col-6">
        <a href="https://www.cover3d.com/fr/">
            <div class="card mx-0 card-style bg-cover" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://i-groove.be/fr/">
            <div class="card mx-0 card-style bg-igroove" data-card-height="200"></div>    
        </a>
        </div>

        <div class="col-6">
        <a href="https://www.ucm.be/">
            <div class="card mx-0 card-style bg-ucm" data-card-height="200"></div>    
        </a>
        </div>
s

    </div>
</div> 
    </div>

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>

</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>