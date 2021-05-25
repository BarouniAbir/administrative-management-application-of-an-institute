<?php namespace App\Classes;
 class Etudiant
 {
	 private $nom;
	 private $prenom;
	 private $adresse;
     private $mail;
     private $tel;
     private $login;
     private $mdp;
	 
	 public function __construct($nom, $prenom, $adresse, $mail, $tel, $login, $mdp)
	 {
		$this->nom=$nom;
        $this->prenom=$prenom;
		$this->adresse=$adresse;
        $this->mail=$mail;
        $this->tel=$tel;
        $this->login=$login;
        $this->mdp=$mdp;
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
	  public function getadresse()
	 {
	 return $this->adresse;
	 }
	 public function setadresse($adresse)
	 {
		 $this->adresse=$adresse;
	 }

     public function getmail()
	 {
	 return $this->mail;
	 }
	 public function setmail($mail)
	 {
		 $this->mail=$mail;
	 }

     public function getTel()
	 {
	 return $this->tel;
	 }
	 public function setTel($tel)
	 {
		 $this->tel=$tel;
	 }

     public function getlogin()
	 {
	 return $this->login;
	 }
	 public function setlogin($login)
	 {
		 $this->login=$login;
	 }

     public function getmdp()
	 {
	 return $this->mdp;
	 }
	 public function setmdp($mdp)
	 {
		 $this->mdp=$mdp;
	 }
 }
?>

