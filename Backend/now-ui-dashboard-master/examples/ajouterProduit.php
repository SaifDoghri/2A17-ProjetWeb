<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
          <a href="../../../View/index.php" class="simple-text logo-mini">
              MM
          </a>
          <a href="../../../View/index.php" class="simple-text logo-normal">
              MindsMatter
          </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <ul class="nav">
                <li class="">
                    <a href="dashboard.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="./listeClientsAdmin.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Clients</p>
                    </a>
                </li>
                <li>
                    <a href="./AfficherForums.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Forums</p>
                    </a>
                </li>
                <li>
                    <a href="./AfficherCategories.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Categories</p>
                    </a>
                </li>
                <li>
                    <a href="./AfficherQuestions.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Questions</p>
                    </a>
                </li>
                <li>
                    <a href="./AfficherSuivis.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Suivis</p>
                    </a>
                </li>
                <li>
                    <a href="./listeMedecinsAdmin.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Medecins</p>
                    </a>
                </li>
                <li>
                    <a href="./listeProduits.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Produits</p>
                    </a>
                </li>
                <li class="active">
                    <a href="./ajouterProduit.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Ajouter Produits</p>
                    </a>
                </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <center><h3> Ajouts des produits </h3> </center>
				<!------------------------------------------------------------------------------------------>
				<?php
    include_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Model\Produit.php';
    include_once 'C:\Users\THINKPAD\Documents\Projet Web\MyProject\Controller\ProduitC.php';

    $error = "";

    // creation produit 
    $Prod = null;

    // créer une instance du contrôleur
    $ProdC = new ProduitC();
    if (
        isset($_POST["idProduit"]) &&
        isset($_POST["prix"]) && 
        isset($_POST["image"]) && 
        isset($_POST["quantite"]) && 
        isset($_POST["titre"]) && 
        isset($_POST["description"])
    ) {
        if (
            !empty($_POST["idProduit"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["image"]) && 
            !empty($_POST["quantite"]) && 
            !empty($_POST["titre"]) && 
            !empty($_POST["description"])
        ) {
            $Prod = new Produit(
                
               $_POST['idProduit'], 			
				$_POST['prix'], 
                $_POST['image'],			
                $_POST['quantite'],
                $_POST['titre'],
                $_POST['description']
            );
            $ProdC->ajouterProduit($Prod);
        }
        else
            $error = "Missing information";
    }

    
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage du produit</title>
</head>
    <body>
        
        <hr>
        
        <div idProduit="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='6' colspan='1'>Fiche Personnelle</td>
				   
				<tr>
                    <td>
                        <label for="idProduit">Id produit:
                        </label>
                    </td>
                    <td><input type="number" name="idProduit"  maxlength="100"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="titre">Titre:
                        </label>
                    </td>
                    <td><input type="text" name="titre"  maxlength="100"></td>
                </tr>

                <tr>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description"  maxlength="100"></td>
                </tr>

				<tr>
                    <td>
                        <label for="image">Image:
                        </label>
                    </td>
					<td>
					<input type="file" name="image"  accept="image/png, image/jpeg">
					</td>

                </tr>

                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td><input type="int" name="prix"  maxlength="6"></td>
                </tr>

                <tr>
                    <td>
                        <label for="quantite">Quantite:
                        </label>
                    </td>
                    <td><input type="int" name="quantite"  maxlength="50"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
				
				
				
				
				
				<!------------------------------------------------------------------------------------------>

              </div>
              <div class="card-body ">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
  </script>
</body>

</html>