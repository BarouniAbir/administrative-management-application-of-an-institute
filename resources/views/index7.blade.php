@extends('template2')
@section('titre2')
Etudiants
@endsection
@section('contenu2')

     <h2>Tableaux des étudiants</h2>
  
     <a class="btn btn-succes" href="{{route('index.create')}}">Créer un nouveau étudiant</a>
  
@if($message=Session::get('success'))
	<div class="alert alert-success">
       <p>{{$message}}</p>
     </div>
@endif
<table border=1>
 <tr>
 <th style="text-align: center" width="200px">Nom</th>
 <th style="text-align: center" width="200px">Prenom</th>
 <th style="text-align: center" width="200px">Adresse personnel</th>
 <th style="text-align: center" width="200px">Mail</th>
 <th style="text-align: center" width="200px">Téléphone</th>
 <th style="text-align: center" width="200px">Login</th>
 <th style="text-align: center" width="200px">Mot de passe</th>
 <th style="text-align: center" width="200px" height="50px">Action</th>
 </tr>
 @foreach ($Etudiants as $Etudiant)
 <tr>
 <td style="text-align: center" width="200px" height="30px">{{$Etudiant->nom}}</td>
  <td style="text-align: center" width="200px" height="30px">{{$Etudiant->prenom}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Etudiant->adresse}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Etudiant->mail}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Etudiant->tel}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Etudiant->login}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Etudiant->mdp}}</td>
    <td style="text-align: center" width="250px" height="30px">
	 <form action="{{url('index',$Etudiant->id)}}" method="POST">
	     <a class="btn btn-info" href="{{route('index.show',$Etudiant->id)}}">Voir</a>
         <a class="btn btn-primary" href="{{route('index.edit',$Etudiant->id)}}">Modifier</a>
	@csrf
	@method('DELETE')
	<button type="submit" class="btn btn-danger">Supprimer</button>
	</form>
	</td>
 </tr>
@endforeach
</table>
@endsection






















