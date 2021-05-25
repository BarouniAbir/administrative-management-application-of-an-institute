@extends('template')
@section('titre')
Etudiants
@endsection
@section('contenu')
     <h2>Affichage des détails d'un étudiant</h2>
     <a class="btn btn-primary" href="{{url('index')}}">Retour</a></br>
	 
	 
	 <table align="center">
	 <tr>
     <td><strong>Nom:</strong>
	 {{$Etudiant->nom}}</td>
	 </tr>
	 
	 <tr>
     <td><strong>Prenom:</strong>
	 {{$Etudiant->prenom}}</td>
	 </tr>
	 
	 <tr>
     <td><strong>Adresse personnel:</strong>
	 {{$Etudiant->adresse}}</td>
	 </tr>
	 
	 <tr>
	 <td> <strong>Mail:</strong>
	 {{$Etudiant->mail}}</td>
	 </tr>
	 
	 <tr>
	  <td><strong>Téléphone:</strong>
	 {{$Etudiant->tel}}</td>
	 </tr>
	 
	 <tr>
	 <td> <strong>Login:</strong>
	 {{$Etudiant->login}}</td>
	 </tr>
	 
	 <tr>
	 <td> <strong>Mot de passe:</strong>
	 {{$Etudiant->mdp}}</td>
	 </tr>
	 </table>
	 
	 
@endsection('contenu')























