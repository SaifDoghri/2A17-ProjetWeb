<?PHP
include $_SERVER['DOCUMENT_ROOT']."/Controller/ForumC.php";


$forumC=new ForumC();
if (isset($_POST["id"])){
	$forumC->supprimerForum($_POST["id"]);
	header('Location: AfficherForums.php');
}

?>