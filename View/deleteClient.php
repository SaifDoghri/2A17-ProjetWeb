<?php
session_start();
include_once "../Controller/clientContoller.php";
$clientC=new clientContoller();
if(isset($_SESSION['Client'])){
$client=$clientC->afficherClients();
$clientC->supprimerClient($_SESSION['Client']['idClient']);
header('Location:../index.php');
}elseif (isset($_POST['idClient'])){
    if(!empty($_POST['idClient'])){
        $clientC->supprimerClient($_POST['idClient']);
        header('Location:C:\Users\THINKPAD\Documents\Projet Web\MyProject\Backend\now-ui-dashboard-master\examples\listeClients.php');

    }
}
