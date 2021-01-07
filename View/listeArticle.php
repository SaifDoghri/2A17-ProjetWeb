<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']."/Controller/articleC.php";
$articleC = new articleC();
$listearticle = $articleC->afficherarticle();
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
   <div style="margin: 10rem;display: flex;flex-direction: column">
       <?php if(isset($_SESSION['Medecin'])){?>
       <form action="ajouterArticle.php">
           <button class="btn btn-primary" type="submit">Ajouter Article</button>
       </form>
       <?php }?>
<?php
foreach ($listearticle as $article) {

?>
   <div style="display: flex;flex-wrap: nowrap;justify-content: space-between; margin: 2rem;">

    <div> titre:
       <?php
       echo $article['titre'];
       ?>
   </div>
   <div> image:
       <img src="<?php
       echo $article['image'];
       ?>">
   </div>
   <div> text:
       <?php
       echo  $article['text'];
       ?>
   </div>
   <div> auteur:
       <?php
       echo $article['auteur'];
       ?>
   </div>
       <form method="post" action="afficherArticle.php">
           <input type="hidden" name="idarticle" value="<?php echo $article['idarticle'];?>">
           <button class="btn btn-primary" type="submit">Read</button>
       </form>
       <?php if(isset($_SESSION['Medecin']) || isset($_SESSION['Admin'])){?>
           <form method="post" action="modifierArticle.php">
               <input type="hidden" name="idarticle" value="<?php echo $article['idarticle'];?>">
               <button class="btn btn-primary" type="submit">Modify</button>
           </form>
           <form method="post" action="supprimerArticle.php">
               <input type="hidden" name="idarticle" value="<?php echo $article['idarticle'];?>">
               <button class="btn btn-primary" type="submit">Delete</button>
           </form>
       <?php }?>
   </div>

       <?php
}
       ?>
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
