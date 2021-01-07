<?PHP
	class Question{
		private $id;
		private $question1;
		private $question2;
		private $question3;
		private $question4;
		private $question5;

		
		function __construct($question1,$question2,$question3,$question4,$question5){
			
			$this->question1=$question1;
			$this->question2=$question2;
			$this->question3=$question3;
			$this->question4=$question4;
			$this->question5=$question5;
		}
		
		function getId(){
			return $this->id;
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
	

	}
?>