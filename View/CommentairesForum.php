<?php 
include  "../Model/Forum.php";
include  "../Controller/ForumC.php";
include  "../Model/Commentaire.php";
include  "../Controller/CommentaireC.php";

$forumC= new ForumC();
$resultat=$forumC->afficherForumCom($_GET["id"]);
$commentaireC= new CommentaireC();
foreach($resultat as $row){
$id=$row['id'];
$categorie=$row['categorie'];
$id_utilisateur=$row['id_utilisateur'];
$sujet=$row['sujet'];
$description=$row['description'];

}


if($_POST['Ajouter'])
{
    if($_POST['commentaireClient']!=""){
        $coment=new Commentaire($_GET["id"],1,$_POST['commentaireClient'],0);
        $commentaireC->ajouterCommentaire($coment);
        header("Location:  ".$_SERVER['PHP_SELF']."?id=".$_GET["id"]);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Forums</title>
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
   <?php include'navbar.php'  ?>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
        </header>


        <!-- Contact Section-->
        <section class="page-section" >
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Forums</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="text-center mt-4">
                                <a class="btn btn-xl btn-outline-dark">
                                    
                                    Sujet : <?php echo $sujet; ?>
                                </br>
                                </br>
                                    Description :
                                </br>
                                    <?php echo $description; ?>
                                </a>
                            </div>
                            </div>
                    </div>

                </div>
                <br />
                <?php
                $res = $commentaireC->afficherCommentaireid_forum($_GET["id"]);
                foreach($res as $row1){

                ?>
                <p class="masthead-subheading font-weight-light mb-0">                            
                                            <?php
                                            $resultaa = $forumC->affichernomprenom($row["id_utilisateur"]);
                                            foreach($resultaa as $row2){
                                            ?>
                                            <?php echo $row2['nom']; ?> <?php echo $row2['prenom']; ?>
                                            <?php
                                            }
                                            ?>
                </p>
                <p class="masthead-subheading font-weight-light mb-0"><?php echo $row1['com']; ?> </p> 
                <p class="masthead-subheading font-weight-light mb-0"><?php echo $row1['date']; ?> 
                <?php
                if($row1['id_utilisateur'] = 1)
                {
                    ?>
                    <a href="ModifierCommentaire.php?id=<?php echo $row1['id']; ?>&idf=<?php echo $_GET["id"]; ?>">Modifier</a>
                    <a href="SupprimerCommentaire.php?id=<?php echo $row1['id']; ?>&idf=<?php echo $_GET["id"]; ?>">Supprimer</a>
                    <?php
                }
                ?>

                </p>
                </br>
                <?php
                }
                ?>

                                <form method="POST" id="form-horizontal" class="form-horizontal" enctype="multipart/form-data" >

                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Commentaire</label>
                                    <input class="form-control" name="commentaireClient" type="text" placeholder="Votre Commentaire" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-xl" value="Ajouter Commentaire" name="Ajouter" >
                            </div>

                                </form>
                            </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
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
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
