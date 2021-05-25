@extends('template')
@section('titre')
Enseignants
@endsection
@section('contenu')
     <h2>Affichage des détails d'un enseignant</h2>
     <a class="btn btn-primary" href="{{url('index2')}}">Retour</a></br>
	 
	 <table align="center">
	 <tr>
     <td><strong>Nom:</strong>
	 {{$Enseignant->nom}}</td>
	  </tr>
	 <tr>
     <td><strong>Prenom:</strong>
	 {{$Enseignant->prenom}}</td>
	  </tr>
	 <tr>
     <td><strong>Code:</strong>
	 {{$Enseignant->code}}</td>
	  </tr>
	 <tr>
	  <td><strong>Grade:</strong>
	 {{$Enseignant->grade}}</td>
	  </tr>
	 <tr>
	  <td><strong>Téléphone:</strong>
	 {{$Enseignant->tel}}</td>
	  </tr>
	 <tr>
	  <td><strong>Mail:</strong>
	 {{$Enseignant->mail}}</td>
	  </tr>
	 <tr>
	  <td><strong>Numero de bureau:</strong>
	 {{$Enseignant->numB}}</td>
	 </table>
@endsection('contenu')























