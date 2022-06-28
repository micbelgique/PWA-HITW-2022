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

    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="info.php" class="header-title">Infos pratiques</a>
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
        <h1><?php echo $lang['INFO-TITLE'] ?></h1>
        <a href="info.php?lang=fr" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-brands fa-font-awesome color-blue-dark"> FR </i></a>
        <a href="info.php?lang=en" class="page-title-icon shadow-xl bg-theme color-theme "><i class="fa-solid fa-flag-usa color-red-dark"> EN </i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>
    <div class="page-title-clear"></div>

    <div class="page-content">

        <div class="card card-style bg-11" data-card-height="250">
            <div class="card-center text-center">
                <h1 class="color-white text-center  mb-n2"><?php echo $lang['INFO-SEARCH-TITLE'] ?></h1>
                <p class="color-white opacity-50"><?php echo $lang['INFO-SEARCH-DESCRIPTION'] ?></p>
                <div class="ms-4 me-4">
                    <div class="search-box bg-white rounded-m bottom-0">
                        <i class="fa fa-search ms-2"></i>
                        <input type="text" class="border-0" data-search>
                    </div>
                </div>
            </div>

            <div class="card-overlay bg-black opacity-60"></div>
        </div>

        <!-- Recherche sur base des mots clé -->

        <div class="card card-style search-results disabled-search-list">
            <div class="content mt-0 mb-0 pb-0">
                <div class="list-group list-custom-large">
                    <div data-filter-item data-filter-name="camping électricité">  
                        <strong>Y a-t-il de l’électricité dans le camping?</strong>
                        <p>Oui, dans le VIP Village, non dans les autres campings, sauf pour raison médicale. La demande se fait via la page « Contact».</p>    
                    </div>

                    <div data-filter-item data-filter-name="barbecue rechaud">  
                        <strong>Les barbecues et réchauds au gaz sont-ils autorisés dans le camping?</strong>
                        <p>Non! Des braséros seront en accès libre au sein du festival. Par mesure de sécurité, les réchauds au gaz et les barbecues « sauvages» sont interdits partout, autant dans le camping qu’au sein du site du festival.</p>  
                        <strong>Les barbecues et réchauds au gaz sont-ils autorisés dans le camping?</strong> 
                        <p>Non! Des braséros seront en accès libre au sein du festival. Par mesure de sécurité, les réchauds au gaz et les barbecues « sauvages» sont interdits partout, autant dans le camping qu’au sein du site du festival.</p>  
                    </div>

                    <div data-filter-item data-filter-name="sandwich frigo vegan gluten foodtrucks bar boissons magasins">  
                        <strong>Comment puis-je me restaurer sur place?</strong> 
                        <p>Tous les midis, un service de sandwich sera proposé. Au soir, des foodtrucks seront présents sur place. Alternatives végétariennes, sans gluten et sans lactose également proposées.
                           Un espace cuisine avec frigos, four à micro-ondes et taques électriques seront accessibles. Voir conditions générales d’utilisation.
                           Un bar est également accessible avec des boissons bio et maison.  
                           Des magasins d’alimentation générale se trouvent à seulement 7 minutes en voiture du Domaine.
                        </p>
                    </div>

                    <div data-filter-item data-filter-name="alcool">  
                        <strong>L’alcool est-il autorisé au sein du festival?</strong>
                        <p>Les alcools de plus de 18° sont interdits au sein du festival.</p>
                    </div>

                    <div data-filter-item data-filter-name="payer consomations cash argent liquide facture">  
                        <strong>Comment puis-je payer sur place mes consommations?</strong>
                        <p>Une puce sur votre bracelet en tissus vous permettra de payer vos consommations au Food Corner et au bar. Le système cashless est rechargeable aux bornes avec votre carte bancaire. Vous pourrez également recharger votre bracelet à l’accueil du festival avec de l’argent liquide. 
                           Je souhaite avoir une facture pour mes consommations sur place. Comment cela se passe-t-il?  
                           Il est préférable de nous prévenir à l’avance via la page «Contact» en nous communiquant le nom + prénom + adresse mail du participant ainsi que les coordonnées de facturation. Une fois arrivé sur place, nous vous communiquerons la démarche à suivre.
                        </p>
                    </div>

                    <div class="search-no-results"><!-- use component-search for no results page --></div>
                </div>
            </div>
        </div>


        <!-- FAQ classique -->
        <div class="card card-style mt-2">
            <div class="content mb-2">
                <p class="color-highlight font-600 mb-n1"><?php echo $lang['INFO-FAQ-INTRO'] ?></p>
                <h1><?php echo $lang['INFO-FAQ-TITLE'] ?></h1>
                <p>
                  <?php echo $lang['INFO-FAQ-DESCRIPTION'] ?>
                </p>

                <div class="divider mt-2 mb-3"></div>

                <h5 href="#FAQ1" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-ONE-TITLE'] ?>
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ1">  
                    <strong> <?php echo $lang['INFO-FAQ-COLLIDER-ONE-SUBTITLE-ONE'] ?></strong> 
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-ONE-DESCRIPTION-ONE'] ?></p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-ONE-SUBTITLE-TWO'] ?></strong>
                    <p class="pb-3"><?php echo $lang['INFO-FAQ-COLLIDER-ONE-DESCRIPTION-TWO'] ?></p>    
                </div>

                <div class="divider mt-3 mb-3"></div>

                <h5 href="#FAQ2" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-TWO-TITLE'] ?>
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ2">
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-TWO-SUBTITLE-ONE'] ?></strong> 
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-TWO-DESCRIPTION-ONE'] ?>
                    </p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-TWO-SUBTITLE-TWO'] ?></strong>
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-TWO-DESCRIPTION-TWO'] ?></p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-TWO-SUBTITLE-THREE'] ?></strong>
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-TWO-DESCRIPTION-THREE'] ?>
                    </p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-TWO-SUBTITLE-FOUR'] ?></strong>
                    <p class="pb-3"><?php echo $lang['INFO-FAQ-COLLIDER-TWO-DESCRIPTION-FOUR'] ?></p>  
                </div>

                <div class="divider mt-3 mb-3"></div>

                <h5 href="#FAQ3" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-THREE-TITLE'] ?>
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ3">
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-THREE-SUBTITLE-ONE'] ?></strong>
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-THREE-DESCRIPTION-ONE'] ?></p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-THREE-SUBTITLE-TWO'] ?></strong>
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-THREE-DESCRIPTION-TWO'] ?></p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-THREE-SUBTITLE-THREE'] ?></strong>
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-THREE-DESCRIPTION-THREE'] ?></p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-THREE-SUBTITLE-FOUR'] ?></strong>
                    <p class="pb-3">
                    <?php echo $lang['INFO-FAQ-COLLIDER-THREE-DESCRIPTION-FOUR'] ?>
                    </p>
                </div>

                <div class="divider mt-3 mb-3"></div>

                <h5 href="#FAQ4" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-FOUR-TITLE'] ?> 
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ4">
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-FOUR-SUBTITLE-ONE'] ?> </strong>
                    <p><?php echo $lang['INFO-FAQ-COLLIDER-FOUR-DESCRIPTION-ONE'] ?> </p>
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-FOUR-SUBTITLE-TWO'] ?> </strong>
                    <p class="pb-3">
                    <?php echo $lang['INFO-FAQ-COLLIDER-FOUR-DESCRIPTION-TWO'] ?> 
                    </p>
                </div>

                <div class="divider mt-3 mb-3"></div>

                <h5 href="#FAQ5" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-TITLE'] ?> 
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ5">
                    <strong> <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-SUBTITLE-ONE'] ?> </strong>
                    <p> <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-DESCRIPTION-ONE'] ?> </p>
                    <strong> <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-SUBTITLE-TWO'] ?> </strong>
                    <p> <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-DESCRIPTION-TWO'] ?> </p>
                    <strong> <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-SUBTITLE-THREE'] ?> </strong>
                    <p class="pb-3">
                    <?php echo $lang['INFO-FAQ-COLLIDER-FIVE-DESCRIPTION-THREE'] ?> 
                    </p>
                </div>

                <div class="divider mt-3 mb-3"></div>

                <h5 href="#FAQ6" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-SIX-TITLE'] ?>
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ6">
                    <strong> <?php echo $lang['INFO-FAQ-COLLIDER-SIX-SUBTITLE-ONE'] ?></strong>
                    <p class="pb-3">
                         <?php echo $lang['INFO-FAQ-COLLIDER-SIX-DESCRIPTION-ONE'] ?>
                    </p>
                </div>

                <div class="divider mt-3 mb-3"></div>

                <h5 href="#FAQ7" data-bs-toggle="collapse" role="button" class="font-14 font-600">
                <?php echo $lang['INFO-FAQ-COLLIDER-SEVEN-TITLE'] ?>
                    <i class="fa fa-angle-down float-end me-2 mt-1 opacity-50 font-10"></i>
                </h5>
                <div class="collapse" id="FAQ7">
                    <strong><?php echo $lang['INFO-FAQ-COLLIDER-SEVEN-SUBTITLE-ONE'] ?></strong>
                    <p class="pb-3">
                    <?php echo $lang['INFO-FAQ-COLLIDER-SEVEN-DESCRIPTION-ONE'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content ends here-->

    <!-- Main Menu-->
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.php" data-menu-width="280"></div>
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
