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

<div id="preloader"><div class="spinner-border color-green-dark" role="status"></div></div>

<div id="page">

    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="coach.php" class="header-title">Coachs</a>
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
        <h1>Coachs</h1>
        <a href="coach.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="coach.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>

    <div class="page-content">
    <div class="card card-style bg-discord" data-card-height="100">
            <div class="card-center px-3 no-click">
                <h1 class="color-white mb-n2 font-24"></h1>
                <h5 class="color-white mt-n1 opacity-80 font-14"></h5>
            </div>
            <div class="card-center">
                <a href="https://discord.gg/JcpybhMjnQ" class="float-end mx-3 gradient-highlight btn-s rounded-sm shadow-xl text-uppercase font-800">Contact</a>
            </div>
            <div class="card-overlay bg-black opacity-10"></div>
        </div>

        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach1" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-ONE-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-ONE-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-ONE-SKILL-ONE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-ONE-SKILL-TWO'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-ONE-SKILL-THREE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-ONE-SKILL-FOUR'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-ONE-SKILL-FIVE'] ?><br>
             
                            </p>
                            <a href="https://www.linkedin.com/in/aclerbois/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach2" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-TWO-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-TWO-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-TWO-SKILL-ONE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-TWO-SKILL-TWO'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-TWO-SKILL-THREE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-TWO-SKILL-FOUR'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-TWO-SKILL-FIVE'] ?><br>
                    
                            </p>
                            <a href="https://www.linkedin.com/in/fvilers/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="divider divider-margins"></div>
        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach3" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-THREE-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-THREE-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-THREE-SKILL-ONE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-THREE-SKILL-TWO'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-THREE-SKILL-THREE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-THREE-SKILL-FOUR'] ?><br>

                            </p>
                            <a href="https://www.linkedin.com/in/eloistree/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach4" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-FOUR-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-FOUR-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FOUR-SKILL-ONE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FOUR-SKILL-TWO'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FOUR-SKILL-THREE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FOUR-SKILL-FOUR'] ?><br>
                            </p>
                            <a href="https://www.linkedin.com/in/damien-vande-kerckhove-91206244/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="divider divider-margins"></div>
        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach5" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-FIVE-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-FIVE-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FIVE-SKILL-ONE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FIVE-SKILL-TWO'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FIVE-SKILL-THREE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FIVE-SKILL-FOUR'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-FIVE-SKILL-FIVE'] ?><br>

                            </p>
                            <a href="https://www.linkedin.com/in/maxim-berge/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach6" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-SIX-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-SIX-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-SIX-SKILL-ONE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-SIX-SKILL-TWO'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-SIX-SKILL-THREE'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-SIX-SKILL-FOUR'] ?><br>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-SIX-SKILL-FIVE'] ?><br>
         
                            </p>
                            <a href="https://www.linkedin.com/in/ambroise-gram/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider divider-margins"></div>
        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach7" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-SEVEN-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-SEVEN-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-SEVEN-SKILL-ONE'] ?><br>
                            </p>
                            <a href="https://www.linkedin.com/in/ch%C3%A9rif-younis-90a24241/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach8" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-EIGHT-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-EIGHT-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-EIGHT-SKILL-ONE'] ?><br>
                            </p>
                            <a href="https://www.linkedin.com/in/fabrice-daniel-9677bb28/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="divider divider-margins"></div>
        <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach9" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-NINE-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-NINE-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-NINE-SKILL-ONE'] ?><br>
                            </p>
                            <a href="https://www.linkedin.com/in/maudelhoir/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach10" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-TEN-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-TEN-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-TEN-SKILL-ONE'] ?><br>
                            </p>
                            <a href="https://www.linkedin.com/in/antoine-petit-2dgameartist/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card card-style mb-0 mx-0 bg-coach11" data-card-height="250"></div>
                    <div class="card card-style mx-0 mt-n5">
                        <div class="content">
                            <p class="color-green-dark font-11 font-600 mb-n2"><?php echo $lang['COACH-ELEVEN-ENTREPRISE'] ?></p>
                            <h1 class="font-14"><?php echo $lang['COACH-ELEVEN-NAME'] ?></h1>
                            <p>
                            <i class="fa-solid fa-fire"></i>  <?php echo $lang['COACH-ELEVEN-SKILL-ONE'] ?><br>
                            </p>
                            <a href="https://www.linkedin.com/in/mathieu-scolas-1a048484/" class="btn btn-s bg-green-dark rounded-s btn-full">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>

</div>

<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="./scripts/custom.js"></script>
</body>
