<?php
session_start();
?>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MINDS MATTER</a>
        <!-- ena zetha logo -->
        <img alt="logo.PNG" src="https://static.wixstatic.com/media/df3222_0f7b9a40e282430391897e3b33803234~mv2.png/v1/fill/w_95,h_45,al_c,q_85,usm_0.66_1.00_0.01/logo_PNG.webp" style="width: 114px; height: 55px; object-fit: contain; object-position: left center;">

        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="index.php#portfolio">Accueil</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="index.php#about">À propos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-1 rounded js-scroll-trigger" href="index.php#contact">Contact</a></li>
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