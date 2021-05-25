@extends('template')
@section('contenu')
     <h2>Créer un nouveau cours</h2>
  
     <a class="btn btn-primary" href="{{url('index3')}}">Retour</a></br>
   

<form action="{{route('index3.store')}}" method="POST">
	@csrf
	<table align="center">
	
	
	<tr>
      <td><strong>Code:</strong></td>
	<td>  <input type="number_format" name="code" value="{{old('code')}}"  placeholder="code"/></td>
     </tr>

<tr>
	 <td><strong>Description:</strong></td>
	 <td> <input type="text" name="description" value="{{old('description')}}" placeholder="description"/></td>
</tr>
	  
	  <tr>
     <td> <strong>Nombre d'heures:</strong></td>
	  <td><input type="number_format" name="nbrHeure" value="{{old('nbrHeure')}}" placeholder="nbrHeure"/></td>
	  </tr>
	  
	  <tr>
	  <td><strong>Coefficient dans le diplôme:</strong></td>
	  <td><input type="number_format" name="coeffDiplome" value="{{old('coeffDiplome')}}" placeholder="coefficient dans le diplôme"/></td>
	  </tr>
	  
	  <tr>
	  <td><strong>Coefficient de l’examen final:</strong></td>
	  <td><input type="number_format" name="coeffExam" value="{{old('coeffExam')}}" placeholder="coefficient de l’examen final"/></td>
	  </tr>
	  
	  <tr>
	  <td><strong>Coefficient de TD:</strong></td>
	  <td><input type="number_format" name="coeffTD" value="{{old('coeffTD')}}" placeholder="coefficient de TD"/></td>
</tr>
 </table>

 <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection('contenu')























