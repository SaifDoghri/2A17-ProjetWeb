<?php
include_once "../Controller/medecinController.php";
include_once "../Model/Medecin.php";
$error="";
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['ccn']) && isset($_POST['cc-password']) && isset($_POST['qualification']) && isset($_POST['experience'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['ccn']) && !empty($_POST['cc-password']) && !empty($_POST['qualification']) && !empty($_POST['experience'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $medecin = new Medecin($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['login'], $_POST['password'], $_POST['ccn'], $_POST['cc-password'],$_POST['qualification'],$_POST['experience']);
            $medecinC = new medecinController();
            $medecinC->ajouterMedecin($medecin);
            header('Location:login.php');
        }else{
            $error="Wrong Email Format";
        }
    }else{
        $error="Fill Form!";
    }
}
    $error="";


?>
<!DOCTYPE html>
<html>
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
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sign Up</h2>
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
                            <label for="firstname">First Name</label>
                            <input class="form-control" name="firstname" id="firstname" type="text" placeholder="First Name" required="required" data-validation-required-message="Please enter your first name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="lastname">Last Name</label>
                            <input class="form-control" name="lastname" id="lastname" type="text" placeholder="Last Name" required="required" data-validation-required-message="Please enter your last name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
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
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="ccn">Credit Card Number</label>
                            <input class="input-credit-card form-control" id="ccn" name="ccn" type="text" placeholder="Credit Card Number"  required="required" data-validation-required-message="Please enter a Credit Card Number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="cc-psswrd">Credit Card PIN</label>
                            <input class="form-control" id="cc-psswrd" name="cc-password" type="password" placeholder="Credit Card PIN" pattern="[0-9]{4}" required="required" data-validation-required-message="Please enter your Credit Card PIN.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="qualification">Qualification</label>
                            <select class="form-control" id="qualification" name="qualification" required="required" data-validation-required-message="Please enter your Qualification.">
                                <option disabled selected value="">Select Your Qualification</option>
                                <option value="BSc">Bsc in Psychology</option>
                                <option value="MSc">Msc in Psychology</option>
                                <option value="PhD">PhD in Psychology</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="experience">Experience</label>
                            <input class="form-control" id="experience" name="experience" type="number" min="0"  placeholder="Experience" required="required" data-validation-required-message="Please enter the number of years spent as a professional psychologist.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                </form>
                <p>Already have an Account? <a href="login.php">Sign In</a></p>
            </div>
        </div>
    </div>
</section>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js" integrity="sha512-KaIyHb30iXTXfGyI9cyKFUIRSSuekJt6/vqXtyQKhQP6ozZEGY8nOtRS6fExqE4+RbYHus2yGyYg1BrqxzV6YA==" crossorigin="anonymous"></script>
<script >
    let cleave=new Cleave('.input-credit-card',{
        creditCard:true
    })
</script>
</html>

