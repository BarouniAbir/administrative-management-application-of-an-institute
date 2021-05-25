@extends('template')
@section('titre')
Cours
@endsection
@section('contenu')
     <h2>Affichage des détails d'un cour</h2>
     <a class="btn btn-primary" href="{{url('index3')}}">Retour</a></br>
	 
	 
 	 <table align="center">
	 <tr>
     <td><strong>Code:</strong>
	 {{$Cours->code}}</td>
	  </tr>
	 <tr>
     <td><strong>Description:</strong>
	 {{$Cours->description}}</td>
	  </tr>
	 <tr>
     <td><strong>Nombre d'heures:</strong>
	 {{$Cours->nbrHeure}}</td>
	  </tr>
	 <tr>
	  <td><strong>Coefficient dans le diplôme:</strong>
	 {{$Cours->coeffDiplome}}</td>
	  </tr>
	 <tr>
	  <td><strong>Coefficient de l’examen final:</strong>
	 {{$Cours->coeffExam}}</td>
	  </tr>
	 <tr>
	  <td><strong>Coefficient de TD:</strong>
	 {{$Cours->coeffTD}}</td>
	  </tr>
	 </table>
	 
	 
@endsection('contenu')























