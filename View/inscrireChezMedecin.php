<?php
session_start();
include_once "C:\Users\THINKPAD\Documents\Projet Web\MyProject\Controller\inscriptionController.php";
$inscriptionC=new inscriptionController();
if($inscriptionC->checkInscription($_SESSION['Client']['idClient'],$_POST['idMedecin'])==0){
    $inscriptionC->ajouterInscription($_POST['idMedecin'], $_SESSION['Client']['idClient']);
}
header('Location:../Backend/now-ui-dashboard-master/examples/listeMedecins.php');