<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/Model/article.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/Controller/articleC.php';
$articleC = new articleC();
if (
isset($_POST["auteur"]) &&
isset($_POST["image"]) &&
isset($_POST["titre"]) &&
isset($_POST["text"])

)
if (
    !empty($_POST["auteur"]) &&
    !empty($_POST["image"]) &&
    !empty($_POST["titre"]) &&
    !empty($_POST["text"])

) {
    $article = new article(0,0,
        $_POST['auteur'],
        $_POST['image'],
        $_POST['titre'],
        $_POST['text'],

    );
    $articleC->ajouterarticle($article);
    header('Location:listeArticle.php');
}
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
    </div>
<div class="row">
<div class="col-lg-8 mx-auto">
    <form id="contactForm" style="margin-top: 15rem" method="post" action="">
    <div class="control-group">
    <div class="form-group floating-label-form-group controls mb-0 pb-2">
    <label for="titre">
        titre
    </label>
        <input class="form-control " name="titre" id="titre" type="text" placeholder="" required>
        <p class="help-block text-danger">

        </p>
    </div>
    </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label for="auteur">
                   auteur
                </label>
                <input class="form-control " name="auteur" id="auteur" type="text" placeholder="" required>
                <p class="help-block text-danger">
                 </p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label for="image">
                    image
                </label>
                <input class="form-control" name="image" id="image" type="file" placeholder="" required>
                <p class="help-block text-danger">
                </p>
            </div>

        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label for="text">
                    text
                </label>
                <input class="form-control " name="text" id="text" type="text" placeholder="" required>
                <p class="help-block text-danger">

                </p>
            </div>
        <br>
        <div class="form-group">
            <button class="btn btn-primary btn-xl" id="sendbutton" type="submit">
                ajouter
            </button>
        </div>
    </form>
</div>
</div>
<!-- Bootstrap core JS-->
</body>
</html>
