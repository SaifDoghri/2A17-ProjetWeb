<?PHP
include $_SERVER['DOCUMENT_ROOT']."/Controller/ForumC.php";


$forumC=new ForumC();
if (isset($_GET["id"])){
	$forumC->Approuver($_GET["id"]);
	header('Location: AfficherForums.php');
}

?>