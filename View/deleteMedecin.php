<?php
session_start();
include_once "../Controller/medecinController.php";
$medecinC = new medecinController();
$medecinC->supprimerMedecin($_SESSION['Medecin']['idMedecin']);
header('Location:../index.php');