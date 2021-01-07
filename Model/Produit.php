<?php

class produit
{
	private $idProduit;
	private $prix;
	private $image;
	private $quantite;
	private $titre;
	private $description;
	


public function __construct($idProduit,$prix,$image,$quantite,$titre,$description)
{

$this->idProduit=$idProduit;
$this->prix=$prix;
$this->image=$image;
$this->quantite=$quantite;
$this->titre=$titre;
$this->description=$description;

}


public function getidProduit(){return $this->idProduit;}
public function getprix(){return $this->prix;}
public function getimage(){return $this->image;}
public function getquantite(){return $this->quantite;}
public function gettitre(){return $this->titre;}
public function getdescription(){return $this->description;}



function setidProduit($idProduit){
		$this->idProduit=$idProduit;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function settitre($titre){
		$this->titre=$titre;
	}
	function setdescription($description){
		$this->description=$description;
	}
	
}

  ?>