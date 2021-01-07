<?php
session_start();
include_once "../Controller/clientContoller.php";
include_once "../Model/Client.php";
include_once "../Controller/medecinController.php";
include_once "../Model/Medecin.php";
$error="";
if(isset($_POST['login']) && isset($_POST['password'])){
    if(!empty($_POST['login']) && !empty($_POST['password'])){
            $clientC = new clientContoller();
            $medecinC=new medecinController();
            $client=$clientC->connexionClient($_POST['login'],$_POST['password']);
            $medecin=$medecinC->connexionMedecin($_POST['login'],$_POST['password']);
            if($client!=null){
                unset($_SESSION['Medecin']);
                unset($_SESSION['Admin']);
                $_SESSION['Client']=$client[0];
                $_SESSION['Client']['type']='client';
                header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
            }elseif ($medecin!=null) {
                unset($_SESSION['Client']);
                unset($_SESSION['Admin']);
                $_SESSION['Medecin']=$medecin[0];
                $_SESSION['Medecin']['type']='client';
                header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
            }elseif ($_POST['login']=="root" && $_POST['password']=="Rootuser1") {
                unset($_SESSION['Client']);
                unset($_SESSION['Medecin']);
                $_SESSION['Admin']=$_POST['login'];
                header('Location:../Backend/now-ui-dashboard-master/examples/dashboard.php');

            }else{
                $error="Incorrect Data";
            }
    }else{
        $error="Fill Form!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MindsMatter</title>
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
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Accueil</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php#about">À propos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Log in</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">

        </div>
        <!-- Contact Section Form-->
        <?php echo $error ;?>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="contactForm" method="POST" action="">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="login">Login</label>
                            <input class="form-control" id="login" name="login" type="text" placeholder="Login" required="required" data-validation-required-message="Please enter your User Name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required="required" data-validation-required-message="Please enter a password.">
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

</body>
</html>
