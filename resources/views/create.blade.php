@extends('template')
@section('contenu')
     <h2>Créer un nouveau étudiant</h2></br></br>
  <a class="btn btn-primary" href="{{url('index')}}">Retour</a>
   

<form action="{{route('index.store')}}" method="POST">
	@csrf
	 <table align="center">
	 <tr>
     <td><strong>Nom:</strong></td>
	 <td><input type="text" name="nom" value="{{old('nom')}}"  placeholder="nom"/></td>
     </tr>
	 
	 <tr>
	 <td><strong>Prénom:</strong></td>
	  <td><input type="text" name="prenom" value="{{old('prenom')}}" placeholder="prenom"/></td>
	</tr>
	
	<tr>
      <td><strong>Adresse personnel:</strong></td>
	  <td><input type="text" name="adresse" value="{{old('adresse')}}" placeholder="adresse personnel"/></td>
	  </tr>
	  
	  <tr>
	 <td> <strong>Mail:</strong></td>
	  <td><input type="mail" name="mail" value="{{old('mail')}}" placeholder="mail"/></td>
	  </tr>
	  
	  <tr>
	 <td> <strong>Téléphone:</strong></td>
	 <td><input type="tel" name="tel" value="{{old('tel')}}" placeholder="téléphone"/></td>
	  </tr>
	  
	   <tr>
	  <td><strong>Login:</strong></td>
	  <td><input type="text" name="login" value="{{old('login')}}" placeholder="login"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td><strong>Mot de passe:</strong></td>
	  <td><input type="text" name="mdp" value="{{old('mdp')}}" placeholder="mot de passe"/></td>
	  </tr>
	  </table>
	  

     <button type="submit" class="btn btn-primary">Valider</button>
     
	
 
 </form>
@endsection('contenu')























