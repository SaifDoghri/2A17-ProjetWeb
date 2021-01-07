<?PHP
	class Suivi{
		private $id;
		private $nom;
		private $prenom;
		private $id_utilisateur;
		private $question1;
		private $question2;
		private $question3;
		private $question4;
		private $question5;
		private $reponse1;
	    private $reponse2;
	    private $reponse3;
	    private $reponse4;
	    private $reponse5;
		private $commentaire1;
	    private $commentaire2;
	    private $commentaire3;
	    private $commentaire4;
	    private $commentaire5;

		
		function __construct($nom,$prenom,$id_utilisateur,$question1,$question2,$question3,$question4,$question5,$reponse1,$reponse2,$reponse3,$reponse4,$reponse5,$commentaire1,$commentaire2,$commentaire3,$commentaire4,$commentaire5){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->id_utilisateur=$id_utilisateur;
			$this->question1=$question1;
			$this->question2=$question2;
			$this->question3=$question3;
			$this->question4=$question4;
			$this->question5=$question5;
			$this->reponse1=$reponse1;
			$this->reponse2=$reponse2;
			$this->reponse3=$reponse3;
			$this->reponse4=$reponse4;
			$this->reponse5=$reponse5;
			$this->commentaire1=$commentaire1;
			$this->commentaire2=$commentaire2;
			$this->commentaire3=$commentaire3;
			$this->commentaire4=$commentaire4;
			$this->commentaire5=$commentaire5;
		}
		
		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getPrenom(){
			return $this->prenom;
		}
		function getId_Utilisateur(){
			return $this->id_utilisateur;
		}
		function getQuestion1(){
			return $this->question1;
		}
		function getQuestion2(){
			return $this->question2;
		}
		function getQuestion3(){
			return $this->question3;
		}
		function getQuestion4(){
			return $this->question4;
		}
		function getQuestion5(){
			return $this->question5;
		}
		function getReponse1(){
			return $this->reponse1;
		}
		function getReponse2(){
			return $this->reponse2;
		}
		function getReponse3(){
			return $this->reponse3;
		}
		function getReponse4(){
			return $this->reponse4;
		}
		function getReponse5(){
			return $this->reponse5;
		}
		function getCommentaire1(){
			return $this->commentaire1;
		}
		function getCommentaire2(){
			return $this->commentaire2;
		}
		function getCommentaire3(){
			return $this->commentaire3;
		}
		function getCommentaire4(){
			return $this->commentaire4;
		}
		function getCommentaire5(){
			return $this->commentaire5;
		}



		function setNom($nom){
			$this->nom=$nom;
		}
		function setPrenom($prenom){
			$this->prenom;
		}
		function setId_utilisateur($id_utilisateur){
			$this->id_utilisateur;
		}
		function setQuestion1($question1){
			$this->question1=$question1;
		}
		function setQuestion2($question2){
			$this->question2=$question2;
		}
		function setQuestion3($question3){
			$this->question3=$question3;
		}
		function setQuestion4($question4){
			$this->question4=$question4;
		}
		function setQuestion5($question5){
			$this->question5=$question5;
		}
		function setReponse1($reponse1){
			$this->reponse1=$reponse1;
		}
		function setReponse2($reponse2){
			$this->reponse2=$reponse2;
		}
		function setReponse3($reponse3){
			$this->reponse3=$reponse3;
		}
		function setReponse4($reponse4){
			$this->reponse4=$reponse4;
		}
		function setReponse5($reponse5){
			$this->reponse5=$reponse5;
		}
		function setCommentaire1($commentaire1){
			$this->commentaire1=$commentaire1;
		}
		function setCommentaire2($commentaire2){
			$this->commentaire2=$commentaire2;
		}
		function setCommentaire3($commentaire3){
			$this->commentaire3=$commentaire3;
		}
		function setCommentaire4($commentaire4){
			$this->commentaire4=$commentaire4;
		}
		function setCommentaire5($commentaire5){
			$this->commentaire5=$commentaire5;
		}
		
	

	}
?>