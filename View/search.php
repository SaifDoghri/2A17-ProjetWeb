<?php
session_start();
if(isset($_POST['search'])){
    if(!empty($_POST['search'])){
        if(strtoupper($_POST['search'])=="PROFILE"){
            if(isset($_SESSION['Client']) || isset($_SESSION['Medecin'])) {
                header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
            }
            }elseif (strtoupper($_POST['search'])=="MEDECINS"){
            if (isset($_SESSION['Admin'])){
                header('Location:../Backend/now-ui-dashboard-master/examples/listeMedecinsAdmin.php');
            }elseif (isset($_SESSION['Client'])){
                header('Location:../Backend/now-ui-dashboard-master/examples/listeMedecins.php');
            }
        }elseif (strtoupper($_POST['search'])=="CLIENTS"){
            if (isset($_SESSION['Admin'])){
                header('Location:../Backend/now-ui-dashboard-master/examples/listeClientsAdmin.php');
            }elseif (isset($_SESSION['Medecin'])){
                header('Location:../Backend/now-ui-dashboard-master/examples/listeMedecins.php');
            }
        }else{
            header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
        }
    }
}
?>