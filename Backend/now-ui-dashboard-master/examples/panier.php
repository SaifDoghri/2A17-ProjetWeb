
<?php
    session_start();
    $user=null;
    $admin=0;
    if(isset($_SESSION['Client'])){
        $user=$_SESSION['Client'];
    }elseif (isset($_SESSION['Medecin'])){
        $user=$_SESSION['Medecin'];
    }
?>
<?php
		//<!-------------------------------------------------PANIER_NOUR----------------------------------------------------->

include_once '../../../Controller/panierC.php';
include_once '../../../Model/Produit.php';
// On prolonge la sessionajout
// On teste si la variable de session existe et contient une valeur

if(isset($_GET['produit']))
			{
						$nbr=count($_SESSION['produit']['id']);
						$id=$_GET['produit'];
							$tmp=array();
							$tmp['id'] = array();
							$tmp['nom'] = array();
							$tmp['prix'] = array();
							$tmp['qte'] = array();
							
							$tmp['image'] = array();
							
							
						  for($i =0;$i<$nbr; $i++)
						  {
						   if ($_SESSION['produit']['id'][$i] !==$_SESSION['produit']['id'][$id])
							{
								array_push( $tmp['id'],$_SESSION['produit']['id'][$i]);
								array_push( $tmp['nom'],$_SESSION['produit']['nom'][$i]);
								array_push( $tmp['prix'],$_SESSION['produit']['prix'][$i]);
								array_push( $tmp['qte'],$_SESSION['produit']['qte'][$i]);
								array_push( $tmp['image'],$_SESSION['produit']['image'][$i]);
							}
							}
						  $_SESSION['produit'] =  $tmp;
						  
						  unset($tmp);
								header("location:panier.php");
								}
								
if(isset($_POST["commander"]))
	{
	$panier=new panierC();
	$nbr=count($_SESSION['produit']['idProduit']);
	$panier2=$panier->ajouterCMD($_SESSION['Client']);
	$id_cmd=$panier->lasinsertid("panier");
	
	for ($i=0;$i<$nbr;$i++)
		{
	
	$panier2=$panier->ajouterPanier($id_cmd,$_SESSION['produit']['idProduit'][$i],$_SESSION['produit']['nom'][$i],$_SESSION['produit']['prix'][$i],$_SESSION['produit']['quantite'][$i],$_SESSION['Client'],$_SESSION['produit']['image'][$i]);
	
		}
	unset($_SESSION['produit']);
	header("location:index.php");
	}
?>
		<!-------------------------------------------------PANIER_NOUR----------------------------------------------------->

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

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="../../../View/index.html" class="simple-text logo-mini">
          MM
        </a>
        <a href="../../../View/index.html" class="simple-text logo-normal">
          MindsMatter
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <?php if ($admin==1){?>
          <li>
            <a href="dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <?php } ?>
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="active ">
            <a href="user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./panier.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
            <?php if(isset($_SESSION['Client'])){?>
                <li>
                    <a href="./listeMedecins.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Medecins</p>
                    </a>
                </li>
            <?php }?>
            <?php if(isset($_SESSION['Medecin'])){?>
                <li>
                    <a href="./listeClients.php">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>Liste Clients</p>
                    </a>
                </li>
            <?php }?>
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
            <a class="navbar-brand" href="#pablo">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form method="post" action="../../../View/search.php">
              <div class="input-group no-border">
                <input type="text" name="search" class="form-control" placeholder="Search...">
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
		<!-------------------------------------------------PANIER_NOUR----------------------------------------------------->
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
//
<form method="post">
<table class="table">
	<thead>
	<tr>
		<th>ID Panier</th>
		<th>Nom produit</th>
		<th>Prix</th>
		<th>Qte</th>
		<th>Image</th>

		
	
	</tr>
	    <tr>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
      
      
      
    </tr>
	</thead>
  <tbody>
  <?php
			if(isset($_SESSION['produit']))
			{
			
			$somme=0;
			$nbr=count($_SESSION['produit']['id']);
			
			for ($i=0;$i<$nbr;$i++)
			{
				
			$prix=$_SESSION['produit']['quantite'][$i]*$_SESSION['produit']['prix'][$i];
			$somme+=$prix;
				?>
    <tr>
      <td><img src="assets/img/<?php echo $_SESSION['produit']['image'][$i];?>" width="80" height="100"></td>
      <td><?php echo $_SESSION['produit']['nom'][$i];?></td>
      <td><?php echo $_SESSION['produit']['prix'][$i];?> TND</td>
      <td><?php echo $_SESSION['produit']['quantite'][$i];?> Piece(s)</td>
      <td><?php echo $prix;?> TND</td>
	  <td> <a href="panier.php?produit=<?php echo $i;?>"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></a></td>
      
      
      
</td>
    </tr>
    <tr>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
      
      
      
</td>
    </tr>
		<?php 
			}
			echo'</tbody></table>';
			echo"<table><tr><th>Totale Commande :</th><th>".$somme." TND</th></tr></table>";
			}
			?>
  

<tr><td><button type="submit"  name="commander" class="btn btn-warning">Commandez</button>

</tr></table>
</form>

<br>


           <br><br><br><br>



</div>

              </div>
            </div>
		<!-------------------------------------------------PANIER_NOUR----------------------------------------------------->

          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy <br>
                  Your chick she so thirsty <br>
                  I'm in that two seat Lambo"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js" integrity="sha512-KaIyHb30iXTXfGyI9cyKFUIRSSuekJt6/vqXtyQKhQP6ozZEGY8nOtRS6fExqE4+RbYHus2yGyYg1BrqxzV6YA==" crossorigin="anonymous"></script>
  <script>
      let card=new Cleave('.input-credit-card',{
         creditCard:true
      });
  </script>
</body>

</html>