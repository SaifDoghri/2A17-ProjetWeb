<?PHP
include $_SERVER['DOCUMENT_ROOT']."/Controller/QuestionC.php";


$questionC=new QuestionC();
if (isset($_POST["id"])){
	$questionC->supprimerQuestion($_POST["id"]);
	header('Location: AfficherQuestions.php');
}

?>