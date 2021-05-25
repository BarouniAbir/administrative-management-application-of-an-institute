<?php namespace App\Classes;
 class Cours
 {
	 private $code;
	 private $description;
	 private $nbrHeure;
     private $coeffDiplome;
     private $coeffExam;
     private $coeffTD;
	 
	 public function __construct($code, $description, $nbrHeure, $coeffDiplome, $coeffExam, $coeffTD)
	 {
		$this->code=$code;
        $this->description=$description;
		 $this->nbrHeure=$nbrHeure;
         $this->coeffDiplome=$coeffDiplome;
         $this->coeffExam=$coeffExam;
         $this->coeffTD=$coeffTD;
	 }
	 public function getCode()
	 {
	 return $this->code;
	 }
	 public function setCode($code)
	 {
		 $this->code=$code;
	 }
	 
	  public function getdescription()
	 {
	 return $this->description;
	 }
	 public function setdescription($description)
	 {
		 $this->description=$description;
	 }
	  public function getnbrHeure()
	 {
	 return $this->nbrHeure;
	 }
	 public function setnbrHeure($nbrHeure)
	 {
		 $this->nbrHeure=$nbrHeure;
	 }
     public function getcoeffDiplome()
	 {
	 return $this->coeffDiplome;
	 }
	 public function setcoeffDiplome($coeffDiplome)
	 {
		 $this->coeffDiplome=$coeffDiplome;
	 }
     public function getcoeffExam()
	 {
	 return $this->coeffExam;
	 }
	 public function setcoeffExam($coeffExam)
	 {
		 $this->coeffExam=$coeffExam;
	 }
     public function getcoeffTD()
	 {
	 return $this->coeffTD;
	 }
	 public function setcoeffTD($coeffTD)
	 {
		 $this->coeffTD=$coeffTD;
	 }
 }
?>

