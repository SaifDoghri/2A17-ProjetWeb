<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../static/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">MINDS MATTER</a>
                <!-- ena zetha logo -->
                <img alt="logo.PNG" src="https://static.wixstatic.com/media/df3222_0f7b9a40e282430391897e3b33803234~mv2.png/v1/fill/w_95,h_45,al_c,q_85,usm_0.66_1.00_0.01/logo_PNG.webp" style="width: 114px; height: 55px; object-fit: contain; object-position: center center;">

                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="#portfolio">Accueil</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="#about">À propos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                        <?php if(!isset($_SESSION['Client']) && !isset($_SESSION['Medecin']) && !isset($_SESSION['Admin'])){ ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="signUpType.html">Sign Up</a></li>
                        <?php }elseif (isset($_SESSION['Client'])){?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="produit.php">Produit</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="panier.php">Panier</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="AfficherSuivis.php">Mes Suivis</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="AfficherForums.php">Forums</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="listeArticle.php">Blog</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="../Backend/now-ui-dashboard-master/examples/user.php">MyDash</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="logout.php">Log Out</a></li>

                        <?php }elseif(isset($_SESSION['Medecin']) || isset($_SESSION['Admin'])){?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="AfficherForums.php">Forums</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="listeArticle.php">Blog</a></li>
                            <?php if(isset($_SESSION['Medecin'])){?>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="../Backend/now-ui-dashboard-master/examples/user.php">MyDash</a></li>
                            <?php }else{?>
                                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="../Backend/now-ui-dashboard-master/examples/dashboard.php">MyDash</a></li>
                            <?php }?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="logout.php">Log Out</a></li>

                        <?php }?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="../assets/img/avataaars.PNG" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">MINDS MATTER, à votre écoute</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                     
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Vous pouvez compter sur nous</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <!-- les conseils -->
                <section id="comp-khuzfzsj1"><div id="bgLayers_comp-khuzfzsj1" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj1" class="_33YMf"></div></div><div data-testid="columns" class="_3BQmz"><div id="comp-khuzfzsj2" class="_1HpZ_"><div id="bgLayers_comp-khuzfzsj2" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj2" class="_33YMf"></div></div><div data-mesh-id="comp-khuzfzsj2inlineContent" data-testid="inline-content" class=""><div data-mesh-id="comp-khuzfzsj2inlineContent-gridContainer" data-testid="mesh-container-content"><div id="comp-khuzfzsj3" class="_2TxBB" title=""><div data-testid="linkElement" class="_2yXCL"><wix-image id="img_comp-khuzfzsj3" class="_1SQyl DFk41" data-image-info="{&quot;containerId&quot;:&quot;comp-khuzfzsj3&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:5760,&quot;height&quot;:3840,&quot;uri&quot;:&quot;11062b_938d4c49eaa04cd5ac225719e9d98bb4~mv2.jpeg&quot;,&quot;name&quot;:&quot;Supportive Friend&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-is-svg="false" data-is-svg-mask="false" data-image-zoomed="" data-src="https://static.wixstatic.com/media/11062b_938d4c49eaa04cd5ac225719e9d98bb4~mv2.jpeg/v1/fill/w_383,h_417,al_c,q_80,usm_0.66_1.00_0.01/Supportive%20Friend.webp" data-has-ssr-src=""><img alt="Supportive Friend" src="https://static.wixstatic.com/media/11062b_938d4c49eaa04cd5ac225719e9d98bb4~mv2.jpeg/v1/fill/w_383,h_417,al_c,q_80,usm_0.66_1.00_0.01/Supportive%20Friend.webp" style="width: 460px; height: 500px; object-fit: cover;"></wix-image></div></div></div></div></div><div id="comp-khuzfzsj4" class="_1HpZ_"><div id="bgLayers_comp-khuzfzsj4" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj4" class="_33YMf"></div></div><div data-mesh-id="comp-khuzfzsj4inlineContent" data-testid="inline-content" class=""><div data-mesh-id="comp-khuzfzsj4inlineContent-gridContainer" data-testid="mesh-container-content"><div id="comp-khuzfzsj5" class="_1Z_nJ" data-testid="richTextElement"><h2 class="font_0" style="text-align:left;line-height:1.41em;font-size:22px"><span class="color_32"><span style="text-transform: uppercase;">GÉRER LE STRESS</span></span></h2></div><div id="comp-khuzfzsj6" class="_1Z_nJ" data-testid="richTextElement"><ol class="font_9 color_11" style="text-align:left;font-size:15px"><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Créez un équilibre entre le travail et les loisirs. ...</span></p></li><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Prenez le temps de rire.</span></p></li><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Apprenez à déléguer; vous n'avez pas à tout faire vous mêmes.</span></p></li><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Utilisez des techniques de relaxation comme le yoga ou la méditation. ...</span></p></li><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Faites beaucoup d'exercice. ...</span></p></li><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Apprenez à&nbsp;gérer&nbsp;votre temps. ...</span></p></li><li style="line-height: 1.875em;"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Mangez sainement.</span></p></li></ol></div></div></div></div></div></section>
                <section id="comp-khuzfzsj7"><div id="bgLayers_comp-khuzfzsj7" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj7" class="_33YMf"></div></div><div data-testid="columns" class="_3BQmz"><div id="comp-khuzfzsj8" class="_1HpZ_"><div id="bgLayers_comp-khuzfzsj8" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj8" class="_33YMf"></div></div><div data-mesh-id="comp-khuzfzsj8inlineContent" data-testid="inline-content" class=""><div data-mesh-id="comp-khuzfzsj8inlineContent-gridContainer" data-testid="mesh-container-content"><div id="comp-khuzfzsj9" class="_2TxBB" title=""><div data-testid="linkElement" class="_2yXCL"><wix-image id="img_comp-khuzfzsj9" class="_1SQyl DFk41" data-image-info="{&quot;containerId&quot;:&quot;comp-khuzfzsj9&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:6519,&quot;height&quot;:4381,&quot;uri&quot;:&quot;11062b_6762af6702f24619aa37fb2c000e3471~mv2.jpeg&quot;,&quot;name&quot;:&quot;Support Group&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-is-svg="false" data-is-svg-mask="false" data-image-zoomed="" data-src="https://static.wixstatic.com/media/11062b_6762af6702f24619aa37fb2c000e3471~mv2.jpeg/v1/fill/w_383,h_633,al_c,q_80,usm_0.66_1.00_0.01/Support%20Group.webp" data-has-ssr-src=""><img alt="Support Group" src="https://static.wixstatic.com/media/11062b_6762af6702f24619aa37fb2c000e3471~mv2.jpeg/v1/fill/w_383,h_633,al_c,q_80,usm_0.66_1.00_0.01/Support%20Group.webp" style="width: 460px; height: 760px; object-fit: cover;"></wix-image></div></div></div></div></div><div id="comp-khuzfzsj10" class="_1HpZ_"><div id="bgLayers_comp-khuzfzsj10" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj10" class="_33YMf"></div></div><div data-mesh-id="comp-khuzfzsj10inlineContent" data-testid="inline-content" class=""><div data-mesh-id="comp-khuzfzsj10inlineContent-gridContainer" data-testid="mesh-container-content"><div id="comp-khuzfzsj11" class="_1Z_nJ" data-testid="richTextElement"><h2 class="font_0" style="text-align:left;line-height:1.41em;font-size:22px"><span class="color_32"><span style="text-transform: uppercase;">3&nbsp;CONSEILS POUR SURMONTER LES OBSTACLES DE LA VIE</span></span></h2></div><div id="comp-khuzfzsj12" class="_1Z_nJ" data-testid="richTextElement"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">1- J’arrête de m’en faire et d’hésiter, j’agis, je passe à l’action<br><br></span></p><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Même si je me suis trompé(e), je recommencerai, mais, c’est mieux que de ne rien faire.</span></p><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">2- J’utilise ma créativité face aux obstacles qui se présentent sur le chemin</span></p><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Mon imagination est l’arme la plus puissante pour vaincre les obstacles et trouver de nouvelles alternatives là où il n’y avait aucune solution apparente.</span></p><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">3-&nbsp;J’ose être moi-même&nbsp;et, c’est très bien comme ça !</span></p><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">Si je ne sais pas QUI je suis, peu importe ! C’est le moment de faire le bilan de toutes mes ressources, compétences naturelles et qualités, en acceptant mes défauts et en considérant mes « points faibles » comme des éléments essentiels et constitutifs de mon originalité.&nbsp;Ce qui fonde ma personnalité, c’est&nbsp;autant&nbsp;mes défauts que mes qualités.</span></p></div></div></div></div></div></section>
                <section id="comp-khuzfzsj13"><div id="bgLayers_comp-khuzfzsj13" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj13" class="_33YMf"></div></div><div data-testid="columns" class="_3BQmz"><div id="comp-khuzfzsj14" class="_1HpZ_"><div id="bgLayers_comp-khuzfzsj14" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsj14" class="_33YMf"></div></div><div data-mesh-id="comp-khuzfzsj14inlineContent" data-testid="inline-content" class=""><div data-mesh-id="comp-khuzfzsj14inlineContent-gridContainer" data-testid="mesh-container-content"><div id="comp-khuzfzsk" class="_2TxBB" title=""><div data-testid="linkElement" class="_2yXCL"><wix-image id="img_comp-khuzfzsk" class="_1SQyl DFk41" data-image-info="{&quot;containerId&quot;:&quot;comp-khuzfzsk&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:5826,&quot;height&quot;:3884,&quot;uri&quot;:&quot;11062b_2bdc3812ee0e40cdb9f782330e05e724~mv2.jpeg&quot;,&quot;name&quot;:&quot;A Supportive Hug&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-is-svg="false" data-is-svg-mask="false" data-image-zoomed="" data-src="https://static.wixstatic.com/media/11062b_2bdc3812ee0e40cdb9f782330e05e724~mv2.jpeg/v1/fill/w_383,h_583,al_c,q_80,usm_0.66_1.00_0.01/A%20Supportive%20Hug.webp" data-has-ssr-src=""><img alt="A Supportive Hug" src="https://static.wixstatic.com/media/11062b_2bdc3812ee0e40cdb9f782330e05e724~mv2.jpeg/v1/fill/w_383,h_583,al_c,q_80,usm_0.66_1.00_0.01/A%20Supportive%20Hug.webp" style="width: 460px; height: 700px; object-fit: cover;"></wix-image></div></div></div></div></div><div id="comp-khuzfzsk1" class="_1HpZ_"><div id="bgLayers_comp-khuzfzsk1" class="_3_wbk"><div data-testid="colorUnderlay" class="P0kib FgquG"></div><div id="bgMedia_comp-khuzfzsk1" class="_33YMf"></div></div><div data-mesh-id="comp-khuzfzsk1inlineContent" data-testid="inline-content" class=""><div data-mesh-id="comp-khuzfzsk1inlineContent-gridContainer" data-testid="mesh-container-content"><div id="comp-khuzfzsk2" class="_1Z_nJ" data-testid="richTextElement"><h2 class="font_0" style="text-align:left;line-height:1.41em;font-size:22px"><span class="color_32"><span style="text-transform: uppercase;">ADDICTION&nbsp;:DES OUTILS POUR LA GUÉRISON</span></span></h2></div><div id="comp-khuzfzsk3" class="_1Z_nJ" data-testid="richTextElement"><p class="font_9" style="line-height:1.875em;font-size:15px"><span class="color_11">La prise en charge des addictions se caractérise par sa multi-disciplinarité : médical (sevrage avec ou sans traitement de substitution – en milieu hospitalier ou ambulatoire), social (réinsertion sociale et professionnelle), et psychologique. En psychothérapie, le travail s’axe autour de deux aspects complémentaires :<br>1. En thérapie comportementale et cognitive (TCC), le travail s’effectue de façon pratique et concrète sur les aspects comportementaux, cognitifs, et émotionnels de l’addiction et des ses répercussions psychosociales (trouble dépressif, troubles anxieux, difficultés relationnelles, etc.).<br>2. Un travail sur l’aspect motivationnel du changement et sur la prévention de la rechute par la prise en compte des&nbsp;<span style="text-decoration:underline"><a href="http://www.psychologue-tcc-nice.fr/modele-transtheorique/" target="_blank" rel="nofollow noopener">stades de changement</a></span>&nbsp;du modèle transthéorique (MTT).</span></p></div></div></div></div></div></section>








                <!-- Icon Divider-->
                <div class="divider-custom">
                    
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center"></div>
                    <!-- Portfolio Item 1-->
                    <!--
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="" />
                        </div>
                    </div>
                     -->
                    <!-- Portfolio Item 2-->
                    <!--
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="" />
                        </div>
                    </div>
                     -->
                    <!-- Portfolio Item 3-->
                    <!--
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="" />
                        </div>
                    </div>
                     -->
                    <!-- Portfolio Item 4-->
                    <!--
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/game.png" alt="" />
                        </div>
                    </div>
                     -->
                    <!-- Portfolio Item 5-->
                    <!--
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="" />
                        </div>
                    </div>
                     -->
                    <!-- Portfolio Item 6-->
                    <!-- 
                        <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="" />
                        </div>
                    </div>
                     -->
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="font_6" style="text-align:center;line-height:1.35em;font-size:40px">QUELQUES MOTS SUR LA THÉRAPIE</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">

                </div>
                <!-- About Section Content-->
                <div class="font_9" style="text-align:center;line-height:1.875em;font-size:15px">
                    <div class="color_11"><p>Vous vous sentez peut-être anxieux ou constamment fatigué, ou bien vous avez du mal à accepter un échec amoureux ou professionnel, ou encore vous avez l'impression de passer à côté de votre vie. Quels que soient vos besoins, je suis à votre écoute et là pour vous aider. La thérapie est un processus de découverte de soi et lors de mes séances, j'encourage la transformation comportementale par l'adoption d'une attitude positive et de nouvelles habitudes. J'ai les outils et l'expérience professionnelle pour vous aider à vous remettre sur les rails du bien-être.</p></div>
                </div>
                
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactez-nous</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                   
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

       
       <!-- Footer-->
        <!--   
            <footer class="footer text-center">  
            <div class="container">
                <div class="row">
        -->
                 <!-- Footer Location-->
        <!--
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
         -->
                    <!-- Footer Social Icons-->
        <!--
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
        -->
                    <!-- Footer About Text-->
        <!--
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>

         -->
         
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>@2020 par MINDS MATTER.</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="../assets/img/portfolio/cabin.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="../assets/img/portfolio/cake.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="../assets/img/portfolio/circus.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="../assets/img/portfolio/game.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="../assets/img/portfolio/safe.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="../assets/img/portfolio/submarine.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="../assets/mail/jqBootstrapValidation.js"></script>
        <script src="../assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="../static/js/scripts.js"></script>
    </body>
</html>
