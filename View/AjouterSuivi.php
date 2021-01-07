<?php 
include  "../Model/Suivi.php";
include  "../Controller/SuiviC.php";
include  "../Model/Question.php";
include  "../Controller/QuestionC.php";
include  "../Model/Forum.php";
include  "../Controller/ForumC.php";

$suiviC= new SuiviC();
$questionC= new QuestionC();
$forumC= new ForumC();
$result=$questionC->recupererQuestion(1);
foreach($result as $row){
$id=$row['id'];
$question1=$row['question1'];
$question2=$row['question2'];
$question3=$row['question3'];
$question4=$row['question4'];
$question5=$row['question5'];

    }

$resultaa = $forumC->affichernomprenom(1);
foreach($resultaa as $row4){
$nom=$row4['nom'];
$prenom=$row4['prenom'];
}
   

if($_POST['Ajouter'])
{
$suivi=new Suivi($nom,$prenom,1,$question1,$question2,$question3,$question4,$question5,$_POST['reponse1'],$_POST['reponse2'],$_POST['reponse3'],$_POST['reponse4'],$_POST['reponse5'],"","","","","");
$suiviC->ajouterSuivi($suivi,1,$id);

header("location: journal/sendmail.php");

    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ajouter Suivi</title>
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
        <section class="page-section" id="Ajouter_Suivi">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ajouter Suivi</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                         <form method="POST" id="form-horizontal" class="form-horizontal" enctype="multipart/form-data" >
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nom</label>
                                    <input class="form-control" name="nom" type="text" placeholder="Nom" value="<?PHP echo $nom ?>" disabled="" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Prenom</label>
                                    <input class="form-control" name="prenom" type="text" placeholder="Prenom" value="<?PHP echo $prenom ?>" disabled="" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-lg-4 mr-auto"><p class="lead">Question 1 : <?PHP echo $question1 ?> ?</p></div>
                            </div>                         
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Reponse</label>
                                    <input class="form-control" name="reponse1" type="text" placeholder="Votre Reponse" required=""/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4 mr-auto"><p class="lead">Question 2 : <?PHP echo $question2 ?> ?</p></div>
                            </div>                         
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Reponse</label>
                                    <input class="form-control" name="reponse2" type="text" placeholder="Votre Reponse" required=""/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4 mr-auto"><p class="lead">Question 3 : <?PHP echo $question3 ?> ?</p></div>
                            </div>                         
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Reponse</label>
                                    <input class="form-control" name="reponse3" type="text" placeholder="Votre Reponse" required=""/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4 mr-auto"><p class="lead">Question 4 : <?PHP echo $question4 ?> ?</p></div>
                            </div>                         
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Reponse</label>
                                    <input class="form-control" name="reponse4" type="text" placeholder="Votre Reponse" required=""/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4 mr-auto"><p class="lead">Question 5 : <?PHP echo $question5 ?> ?</p></div>
                            </div>                         
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Reponse</label>
                                    <input class="form-control" name="reponse5" type="text" placeholder="Votre Reponse" required="" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <br />
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-xl" value="Ajouter" name="Ajouter" >
                            </div>
                        </form>
                    </div>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>
        <script src="js/Suivi.js"></script>

    </body>
</html>
