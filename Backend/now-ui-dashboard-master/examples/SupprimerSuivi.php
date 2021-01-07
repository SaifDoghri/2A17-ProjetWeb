<?PHP
include $_SERVER['DOCUMENT_ROOT']."/Controller/SuiviC.php";


$suiviC=new SuiviC();
if (isset($_POST["id"])){
	$suiviC->supprimerSuivi($_POST["id"]);
	header('Location: AfficherSuivis.php');
}

?>