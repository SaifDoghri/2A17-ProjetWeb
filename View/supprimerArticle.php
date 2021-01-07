<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Controller/articleC.php';
$articleC = new articleC();
if(isset($_POST['idarticle'])) {
    if(!empty($_POST['idarticle'])) {
        $articleC->supprimerarticle($_POST['idarticle']);
    }
}
header('location:listeArticle.php');
?>
