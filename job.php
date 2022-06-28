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
        <a href="job.php" class="header-title">JOB</a>
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
        <h1><?php echo $lang['JOB-TITLE'] ?></h1>
        <a href="job.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="job.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
    <div id="translator_5480">

      
    <div class="page-content">
    <div>

    
        <a href="pdf-job/Oniryx-Analyste.pdf" class="default-link card card-style bg-job12" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-FOUR-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-FOUR-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Oniryx-Dev-Dotnet.pdf" class="default-link card card-style bg-job15" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-SEVEN-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-SEVEN-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        
        <a href="pdf-job/Oniryx-Dev-Java.pdf" class="default-link card card-style bg-job16" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-EIGHT-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-EIGHT-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Oniryx-Architecte-Java.pdf" class="default-link card card-style bg-job14" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-SIX-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-SIX-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Oniryx-Architecte-Dotnet.pdf" class="default-link card card-style bg-job13" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-FIVE-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-FIVE-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Delaware-Data-Science-Engineering.pdf" class="default-link card card-style bg-job17" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-EIGHT-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-EIGHT-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Alstom-CC-Engineer-2022-VF.pdf"  class="default-link card card-style bg-job3" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-THREE-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-THREE-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Accenture-Front-End-Dev.pdf" class="default-link card card-style bg-job4" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-FOUR-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-FOUR-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Accenture-Full-Stack-Dev.pdf" class="default-link card card-style bg-job5" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-FIVE-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-FIVE-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Kumoo-Cronos-R.pdf"  class="default-link card card-style bg-job11" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-THREE-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-THREE-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Accenture-Java-Dev.pdf" class="default-link card card-style bg-job6" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-SIX-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-SIX-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>


        <a href="pdf-job/Delaware-Junior-Finance-IT-Consultant.pdf" class="default-link card card-style bg-job18" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-EIGHT-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-EIGHT-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>


        <a href="pdf-job/Delaware-Junior-Technical-Consultant.pdf" class="default-link card card-style bg-job20" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-EIGHT-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-EIGHT-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Delaware-Junior-Supply-Chain-IT-Consultant.pdf" class="default-link card card-style bg-job19" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-EIGHT-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-EIGHT-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/KUMOO-Cronos-LEAT.pdf" class="default-link card card-style bg-job8" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-EIGHT-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-EIGHT-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Accenture-Lead-Dev.pdf" class="default-link card card-style bg-job7" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-SEVEN-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-SEVEN-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>


        <a href="pdf-job/KUMOO-Cronos-LIC.pdf" class="default-link card card-style bg-job9" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-ONE-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-ONE-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/KUMOO-Cronos-LIDC.pdf"  class="default-link card card-style bg-job10" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-TWO-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-TWO-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

        <a href="pdf-job/Alstom-VV-Engineer-2022-VF.pdf"  class="default-link card card-style bg-job2" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-TWO-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-TWO-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>


        <a href="pdf-job/Alstom-SW-Engineer-2022-VF.pdf" class="default-link card card-style bg-job1" data-card-height="450" title="Awesome Athlete">
            <div class="card-top">
                <h1 class="text-center color-white font-30 font-800 mt-4 mb-0"><?php echo $lang['JOB-ONE-NAME'] ?></h1>
                <p class="color-white text-center"><?php echo $lang['JOB-ONE-SUBTITLE'] ?></p>
            </div>
            <div class="card-bottom mb-1">
                <span class="btn btn-m btn-center-l rounded-sm bg-green-dark mb-3 font-700 scale-box"><?php echo $lang['JOB_BUTTON'] ?></span>
            </div>
            <div class="card-overlay bg-gradient opacity-30"></div>
        </a>

  
    </div>
    </div>

    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>
</div>

<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
