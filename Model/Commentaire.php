<?PHP
	class Commentaire{
		private $id;
		private $id_forum;
		private $id_utilisateur;
		private $com;
		private $etat;
		private $date;

		
		function __construct($id_forum,$id_utilisateur,$com,$etat){
			
			$this->id_utilisateur=$id_utilisateur;
			$this->id_forum=$id_forum;
			$this->com=$com;
			$this->etat=$etat;
		}
		
		function getId(){
			return $this->id;
		}
		function getId_utilisateur(){
			return $this->id_utilisateur;
		}
		function getId_forum(){
			return $this->id_forum;
		}
		function getCom(){
			return $this->com;
		}
		function getEtat(){
			return $this->etat;
		}
		function getDate(){
			return $this->date;
		}

		function setId_utilisateur($id_utilisateur){
			$this->id_utilisateur=$id_utilisateur;
		}
		function setId_forum($id_forum){
			$this->id_forum=$id_forum;
		}
		function setCom($com){
			$this->com=$com;
		}
		function setEtat($etat){
			$this->etat=$etat;
		}		
		function setDate($date){
			$this->date=$date;
		}		
	

	}
?>