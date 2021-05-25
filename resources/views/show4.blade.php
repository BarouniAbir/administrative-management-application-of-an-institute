@extends('template')
@section('titre')
Diplômes
@endsection
@section('contenu')
     <h2>Affichage des détails d'un diplôme</h2>
     <a class="btn btn-primary" href="{{url('index2')}}">Retour</a></br>
	 
	 
	 <table align="center">
	 <tr>
     <td><strong>Nom:</strong>
	 {{$Diplome->nom}}</td>
	 </tr>
	 
	 <tr>
     <td><strong>Liste des cours:</strong>
	 {{$Diplome->listCours}}</td>
	 </tr>
	 
	 </table>
	 
	 
@endsection('contenu')























