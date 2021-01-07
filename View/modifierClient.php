<?php
include_once "../Controller/clientContoller.php";
include_once "../Model/Client.php";
$error="";
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['ccn']) && isset($_POST['cc-password'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['ccn']) && !empty($_POST['cc-password'])){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $client = new Client($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['login'], $_POST['password'], $_POST['ccn'], $_POST['cc-password']);
            $clientC = new clientContoller();
            $clientC->modifierClient($client,$_POST['idClient']);
            header('Location:../Backend/now-ui-dashboard-master/examples/dashboard.php');
        }else{
            $error="Wrong Email Format";
        }
    }else{
        $error="Fill Form!";
        header('Location:../Backend/now-ui-dashboard-master/examples/user.php');
    }
}