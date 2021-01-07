<?PHP
	include $_SERVER['DOCUMENT_ROOT']."\Controller\ProduitC.php";

	$ProduitC=new ProduitC();
	
	if (isset($_POST["idProduit"])){
		$ProduitC->supprimerProduit($_POST["idProduit"]);
		header('Location:listeProduits.php');
	}

?>