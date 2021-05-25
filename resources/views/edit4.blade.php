@extends('template')
@section('contenu')
     <h2>Mettre à jour diplôme</h2></br>

     <a class="btn btn-primary" href="{{url('index4')}}">Retour</a></br>
 
<form action="{{route('index4.update',$Diplome->id)}}" method="POST">
	  
	@csrf
	@method('PUT')
	
	<table align="center">
	
	<tr>
      <td><strong>Nom:</strong>
	  <td><input type="text" name="nom" value="{{$Diplome->nom}}"/>
	</tr>
 
	<tr>
      <td><strong>Liste des cours:</strong>
	  <td><input type="textarea" name="listCours" value="{{$Diplome->prenom}}" />
	</tr>
	  
	 
	  </table>
 
 <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection('contenu')























