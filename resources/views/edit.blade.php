@extends('template')
@section('contenu')
     <h2>Mettre à jour étudiant</h2></br>

     <a class="btn btn-primary" href="{{url('index')}}">Retour</a></br>
 
<form action="{{route('index.update',$Etudiant->id)}}" method="POST">
	  
	@csrf
	@method('PUT')
	
	<table align="center">
	
	<tr>
      <td><strong>Nom:</strong>
	  <td><input type="text" name="nom" value="{{$Etudiant->nom}}"/>
	</tr>
 
	<tr>
      <td><strong>Prenom:</strong>
	  <td><input type="text" name="prenom" value="{{$Etudiant->prenom}}" />
	</tr>
	  
	  <tr>
     <td> <strong>Adresse personnel:</strong>
	  <td><input type="text" name="adresse" value="{{$Etudiant->adresse}}" />
	  </tr>
	  
	  <tr>
	  <td><strong>Mail:</strong>
	  <td><input type="mail" name="mail" value="{{$Etudiant->mail}}" />
	  </tr>
	  
	  <tr>
	  <td><strong>Téléphone:</strong>
	  <td><input type="tel" name="tel" value="{{$Etudiant->tel}}" />
	  </tr>
	  
	  <tr>
	  <td><strong>Login:</strong>
	  <td><input type="text" name="login" value="{{$Etudiant->login}}" />
	  </tr>
	  
	  <tr>
	 <td> <strong>Mot de passe:</strong>
	 <td> <input type="text" name="mdp" value="{{$Etudiant->mdp}}" />
	  </tr>
	  </table>
 
 <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection('contenu')























