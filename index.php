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


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZCK06X43R3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZCK06X43R3');
</script>



</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-left header-auto-show">
        <a href="index.php" class="header-title">HITW</a>
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
        <h1>HITW</h1>
        <a href="index.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="index.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        


        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>
    <div id="translator_5480">

      
    <div class="page-content">
        <div data-card-height="300" class="card card-style shadow-xxl bg-home">
            <div class="card-top  pt-3 ps-3">
                <h1 class="color-white font-18 mb-0 opacity-50"></h1>
                <h1 class="color-white font-30 mt-n2 mb-5"></h1>
            </div>
            <div class="card-overlay bg-gradient opacity-60"></div>
        </div>
        
        <h4 class="ms-3 mb-4"><?php echo $lang['HOME-DESCRIPTION'] ?></h4>
     
        <p class="ms-3 mb-4"></p>

        <div class="splide double-slider slider-no-dots" id="double-slider-1"  >
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                       <a  href="program.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-clock color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"><?php echo $lang['HOME-CAROUSSEL-PROGRAM'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-PROGRAM-DESCRIPTION'] ?><br>
                            </p>
                        </div>
                        </a>
                    </div>

                    <div class="splide__slide">
                        <a href="coach.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-circle-question color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"><?php echo $lang['HOME-CAROUSSEL-COACH'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-COACH-DESCRIPTION'] ?>
                            </p>
                        </div>
                      </a> 
                    </div>

                    <div class="splide__slide">
                     <a href="talks.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-chalkboard-user color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"><?php echo $lang['HOME-CAROUSSEL-TALKS'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-TALKS-DESCRIPTION'] ?>
                            </p>
                        </div>
                     </a>
                    </div>

                    <div class="splide__slide">
                     <a href="map.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-map color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"><?php echo $lang['HOME-CAROUSSEL-MAP'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-MAP-DESCRIPTION'] ?>
                            </p>
                        </div>
                    </a>
                    </div>

                    <div class="splide__slide">
                    <a href="info.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-circle-info color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"> <?php echo $lang['HOME-CAROUSSEL-INFOS'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-INFOS-DESCRIPTION'] ?>
                            </p>
                        </div>
                    </a>
                    </div>

                    <div class="splide__slide">
                     <a href="emergency.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-triangle-exclamation color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"><?php echo $lang['HOME-CAROUSSEL-EMERGENCY'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                             <?php echo $lang['HOME-CAROUSSEL-EMERGENCY-DESCRIPTION'] ?>
                            </p>
                        </div>
                    </a>
                    </div>

                    <div class="splide__slide">
                    <a href="job.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-briefcase color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0"> <?php echo $lang['HOME-CAROUSSEL-JOBS'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-JOBS-DESCRIPTION'] ?>
                            </p>
                        </div>
                        </a>
                    </div>
                    <div class="splide__slide">
                        <a href="organizer.php"> 
                        <div class="card card-style mx-3">
                            <div class="d-flex pt-3 pb-3">
                                <div class="align-self-center">
                                    <i class="fa-solid fa-star color-green-dark ms-3 font-34 mt-1"></i>
                                </div>
                                <div class="align-self-center">
                                    <h5 class="ps-2 ms-1 mb-0">  <?php echo $lang['HOME-CAROUSSEL-ORGANIZER'] ?></h5>
                                </div>
                            </div>
                            <p class="px-3">
                            <?php echo $lang['HOME-CAROUSSEL-ORGANIZER-DESCRIPTION'] ?>
                            </p>
                        </div>
                    </a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style bg-partners" data-card-height="100">
            <div class="card-center px-3 no-click">
                <h1 class="color-white mb-n2 font-24"></h1>
                <h5 class="color-white mt-n1 opacity-80 font-14"></h5>
            </div>
            <div class="card-center">
                <a href="partners.php" class="float-start mx-3 gradient-highlight btn-s rounded-sm shadow-xl text-uppercase font-800"><?php echo $lang['HOME-CARD-PARTNERS-BUTTON'] ?></a>
            </div>
            <div class="card-overlay bg-black opacity-10"></div>
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

        <div class="card card-style bg-digital" data-card-height="100">
            <div class="card-center px-3 no-click">
                <h1 class="color-white mb-n2 font-24"></h1>
                <h5 class="color-white mt-n1 opacity-80 font-14"></h5>
            </div>
            <div class="card-center">
                <a href="https://www.microsoft.com/en-be/digitalambetion/" class="float-start mx-3 gradient-highlight btn-s rounded-sm shadow-xl text-uppercase font-800"><?php echo $lang['HOME-CARD-SUMMIT-BUTTON'] ?></a>
            </div>
            <div class="card-overlay bg-black opacity-10"></div>
        </div>

               
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>
</div>

<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
