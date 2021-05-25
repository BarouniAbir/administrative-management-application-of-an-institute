<?php namespace App\Classes;
 class Dimplome
 {
	 private $nom;
	 private $listCours;
	 
	 public function __construct($nom, $listCours)
	 {
		$this->nom=$nom;
		$this->listCours=$listCours;
	 }
	 public function getnom()
	 {
	 return $this->nom;
	 }
	 public function setnom($nom)
	 {
		 $this->nom=$nom;
	 }

	 public function getlistCours()
	 {
	 return $this->listCours;
	 }
	 public function setlistCours($listCours)
	 {
		 $this->listCours=$listCours;
	 }

 }
?>

