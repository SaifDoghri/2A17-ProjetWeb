<?PHP
include $_SERVER['DOCUMENT_ROOT']."/Controller/CommentaireC.php";


$commentaireC=new CommentaireC();
if (isset($_GET["id"])){
	$commentaireC->NonApprouver($_GET["id"]);
header("Location:  AfficherCommentaireForum.php?id=".$_GET["idf"]);
}

?>