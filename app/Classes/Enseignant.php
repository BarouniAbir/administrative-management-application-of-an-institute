<?php namespace App\Classes;
 class Enseignant
 {
	 private $nom;
	 private $prenom;
	 private $code;
     private $grade;
     private $tel;
     private $mail;
     private $numB;
	 
	 public function __construct($nom, $prenom, $code, $grade, $tel, $mail, $numB)
	 {
		$this->nom=$nom;
        $this->prenom=$prenom;
		$this->code= $code;
        $this->grade=$grade;
        $this->tel=$tel;
        $this->mail=$mail;
        $this->numB=$numB;
	 }
	 public function getNom()
	 {
	 return $this->nom;
	 }
	 public function setNom($nom)
	 {
		 $this->nom=$nom;
	 }
	 
	  public function getprenom()
	 {
	 return $this->prenom;
	 }
	 public function setprenom($prenom)
	 {
		 $this->prenom=$prenom;
	 }
	  public function getcode()
	 {
	 return $this->code;
	 }
	 public function setcode($code)
	 {
		 $this->code=$code;
	 }

     public function getgrade()
	 {
	 return $this->grade;
	 }
	 public function setgrade($grade)
	 {
		 $this->grade=$grade;
	 }

     public function getTel()
	 {
	 return $this->tel;
	 }
	 public function setTel($tel)
	 {
		 $this->tel=$tel;
	 }

     public function getmail()
	 {
	 return $this->mail;
	 }
	 public function setmail($mail)
	 {
		 $this->mail=$mail;
	 }

     public function getnumB()
	 {
	 return $this->numB;
	 }
	 public function setnumB($numB)
	 {
		 $this->numB=$numB;
	 }
 }
?>

