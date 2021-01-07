<?php
session_start();
include_once "../Controller/medecinController.php";
include_once "../Model/Medecin.php";
$error="";
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['ccn']) && isset($_POST['cc-password']) && isset($_POST['qualification']) && isset($_POST['experience'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['ccn']) && !empty($_POST['cc-password']) && !empty($_POST['qualification']) && !empty($_POST['experience'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $medecin = new Medecin($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['login'], $_POST['password'], $_POST['ccn'], $_POST['cc-password'],$_POST['qualification'],$_POST['experience']);
            $medecinC = new medecinController();
            $medecinC->modifierMedecin($medecin,$_POST['idMedecin']);
            $_SESSION['Medecin']=$medecinC->recupererMedecin($_POST['idMedecin'])[0];
            header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
        }else{
            $error="Wrong Email Format";
        }
    }else{
        $error="Fill Form!";
        header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
    }
}
