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
        <a href="index.php" class="header-title"><?php echo $lang['PROGRAM-TITLE'] ?></a>
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
        <h1><?php echo $lang['PROGRAM-TITLE'] ?></h1>
        <a href="program.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="program.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>

        
      
    </div>
    <div class="page-title-clear"></div>

    <div class="page-content">

        <div class="card card-style">
            <div class="content">
                <h4><?php echo $lang['PROGRAM-DAY-ONE-TITLE'] ?></h4>
            </div>
        </div>
        <div class="card card-style">
            <div class="cal-footer">
                <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-ONE-CARD-ONE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-ONE-CARD-ONE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-ONE-CARD-ONE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-ONE-CARD-TWO-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-ONE-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-ONE-CARD-TWO-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-ONE-CARD-THREE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-ONE-CARD-THREE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-ONE-CARD-THREE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-ONE-CARD-FOUR-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-ONE-CARD-FOUR-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-ONE-CARD-FOUR-TITLE'] ?></strong>
                    <span><i class="fa fa-building"></i><?php echo $lang['PROGRAM-DAY-ONE-CARD-FOUR-SITUATION'] ?></span>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <h4><?php echo $lang['PROGRAM-DAY-TWO-TITLE'] ?></h4>
            </div>
        </div>
        <div class="card card-style">
            <div class="cal-footer">
                <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-ONE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-ONE-TITLE'] ?></strong>
                </div>
                <!-- <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-TWO-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-TWO-TITLE'] ?></strong>
                    <span><i class="fa fa-building"></i><?php echo $lang['PROGRAM-DAY-TWO-CARD-TWO-SITUATION'] ?></span>
                </div> -->
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-THREE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-THREE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-THREE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-FOUR-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-FOUR-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-FOUR-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-FIVE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-FIVE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-FIVE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-SIX-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-SIX-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-SIX-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-SEVEN-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-SEVEN-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-SEVEN-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-EIGHT-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-EIGHT-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-EIGHT-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-TWO-CARD-NINE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-TWO-CARD-NINE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-TWO-CARD-NINE-TITLE'] ?></strong>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <h4><?php echo $lang['PROGRAM-DAY-THREE-TITLE'] ?></h4>
            </div>
        </div>
        <div class="card card-style">
            <div class="cal-footer">
                <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-ONE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-ONE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-TWO-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-TWO-TITLE'] ?></strong>
                    <span><i class="fa fa-building"></i><?php echo $lang['PROGRAM-DAY-THREE-CARD-TWO-SITUATION'] ?></span>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-THREE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-THREE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-THREE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-FOUR-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-FOUR-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-FOUR-TITLE'] ?></strong>
                </div>
                <!-- <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-FIVE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-FIVE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-FIVE-TITLE'] ?></strong>
                </div> -->
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-SIX-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-SIX-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-SIX-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-THREE-CARD-SEVEN-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-THREE-CARD-SEVEN-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-THREE-CARD-SEVEN-TITLE'] ?></strong>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <h4><?php echo $lang['PROGRAM-DAY-FOUR-TITLE'] ?></h4>
            </div>
        </div>
        <div class="card card-style">
            <div class="cal-footer">
                <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-FOUR-CARD-ONE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-FOUR-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-FOUR-CARD-ONE-TITLE'] ?></strong>
                </div>
                <!-- <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-FOUR-CARD-TWO-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-FOUR-CARD-TWO-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-FOUR-CARD-TWO-TITLE'] ?></strong>
                    <span><i class="fa fa-building"></i><?php echo $lang['PROGRAM-DAY-FOUR-CARD-TWO-SITUATION'] ?></span>
                </div> -->
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-FOUR-CARD-THREE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-FOUR-CARD-THREE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-FOUR-CARD-THREE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-FOUR-CARD-FOUR-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-FOUR-CARD-FOUR-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-FOUR-CARD-FOUR-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                    <em><?php echo $lang['PROGRAM-DAY-FOUR-CARD-FIVE-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-FOUR-CARD-FIVE-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-FOUR-CARD-FIVE-TITLE'] ?></strong>
                </div>
                <div class="cal-schedule">
                <em><?php echo $lang['PROGRAM-DAY-FOUR-CARD-SIX-TIME-BEGIN'] ?><br><?php echo $lang['PROGRAM-DAY-FOUR-CARD-SIX-TIME-END'] ?></em>
                    <strong><?php echo $lang['PROGRAM-DAY-FOUR-CARD-SIX-TITLE'] ?></strong>
                </div>
            </div>
        </div>
       


    </div>

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>

</div>

<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>
</body>
