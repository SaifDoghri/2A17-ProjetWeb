<?PHP
	class article{
		private ?int $nombresdepartages = null;
		private ?int $likes = null;
		private ?string $auteur = null;
		private ?string $image = null;
		private ?string $titre = null;
		private ?string $text = null;
		
		
		function __construct(int $nombresdepartages, int $likes, string $auteur, string $image, string $titre, string $text){
			$this->nombresdepartages=$nombresdepartages;
			$this->likes=$likes;
			$this->auteur=$auteur;
			$this->image=$image;
			$this->titre=$titre;
			$this->text=$text;
		}

		function getnombresdepartages():int{
			return $this->nombresdepartages;

		}
		function getlikes():int{
			return $this->likes;
		}

		function gettext(): string{
			return $this->text;
		}
		function getimage(): string{
			return $this->image;
		}
		function getauteur(): string{
			return $this->auteur;
		}
		function gettitre(): string{
			return $this->titre;
		}
		

		function setnombresdepartages(int $nombresdepartages): void{
			$this->nombresdepartages=$nombresdepartages;
		}
		function setlikes(int $likes): void{
			$this->likes=$likes;
		}
		function settext(string $text): void{
			$this->text=$text;
		}
		function setimage(string $image): void{
			$this->image=$image;
		}
		function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setauteur(string $auteur): void{
			$this->auteur=$auteur;
		}
	}
?>