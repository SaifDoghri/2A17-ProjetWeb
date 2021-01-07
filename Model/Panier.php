<?php
class panier
{
	private $id;
	private $Nom;
	private $Prix;
	private $Quantite;
	private $Image;
	

		public function __construct($id,$Nom,$Prix,$Quantite,$Image)
		{
			$this->id=$id;
			$this->Nom=$Nom;
			$this->Prix=$Prix;
			$this->Quantite=$Quantite;
			$this->Image=$Image;
			
		}

		public function get_id()
		{
			return $this->id;
		}

		public function set_id($idProduit)
		{
			$this->id = $idProduit;
		}
		public function get_Image()
		{
			return $this->Image;
		}

		public function set_Image($Image)
		{
			$this->Image = $Image;
		}
		public function get_Nom()
		{
			return $this->Nom;
		}

		public function set_nom($nom)
		{
			$this->Nom = $nom;
		}

		public function get_Prix()
		{
			return $this->Prix;
		}

		public function set_Prix($prix)
		{
			$this->Prix = $prix;
		}

		public function get_Quantite()
		{
			return $this->Quantite;
		}

		public function set_Quantite($quantite)
		{
			$this->Quantite = $quantite;
		}
		
}	
?>