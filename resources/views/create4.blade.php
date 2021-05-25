@extends('template')
@section('contenu')
     <h2>Créer un nouveau diplôme</h2></br></br>
	
  <a class="btn btn-primary" href="{{url('index4')}}">Retour</a>
   

<form action="{{route('index4.store')}}" method="POST">
	@csrf
	 <table align="center">
	 <tr>
     <td><strong>Nom:</strong></td>
	 <td><input type="text" name="nom" value="{{old('nom')}}"  placeholder="nom"/></td>
     </tr>
	 
	 <tr>
	 <td><strong>Liste des cours:</strong></td>
	  <td><input type="textarea" name="listCours" value="{{old('listCours')}}" placeholder="liste des cours"/></td>
	</tr>
	
	  </table>
	  
     <button type="submit" class="btn btn-primary">Valider</button>
	  
      <a class="btn btn-succes" href="{{url('index3')}}">Accéder a la liste des cours</a>
	
 
 </form>
@endsection('contenu')























