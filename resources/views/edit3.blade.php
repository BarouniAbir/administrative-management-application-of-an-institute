@extends('template')
@section('contenu')
     <h2>Mettre à jour cours</h2></br>

     <a class="btn btn-primary" href="{{url('index3')}}">Retour</a></br>
 
<form action="{{route('index3.update',$Cours->id)}}" method="POST">
	  
	@csrf
	@method('PUT')
	<table align="center">
	<tr>
      <td><strong>Code:</strong></td>
	 <td> <input type="number_format" name="code" value="{{$Cours->code}}"/></td>
</tr>
 <tr>
     <td> <strong>Description:</strong></td>
	 <td> <input type="text" name="description" value="{{$Cours->description}}" /></td>
</tr>
<tr>
    <td>  <strong>Nombre d'heures:</strong></td>
	 <td> <input type="number_format" name="nbrHeure" value="{{$Cours->nbrHeure}}" /></td>
	  </tr>
	  <tr>
	  <td><strong>Coefficient dans le diplôme:</strong></td>
	  <td><input type="number_format" name="coeffDiplome" value="{{$Cours->coeffDiplome}}" /></td>
	  </tr>
	  <tr>
	 <td> <strong>Coefficient de l’examen final:</strong></td>
	  <td><input type="number_format" name="coeffExam" value="{{$Cours->coeffExam}}" /></td>
	  </tr>
	  <tr>
	  <td><strong>Coefficient de TD:</strong></td>
	  <td><input type="number_format" name="coeffTD" value="{{$Cours->coeffTD}}" /></td>
	  </tr>
	  </table>

 
 <button type="submit" class="btn btn-primary">Submit</button>

 
</form>
@endsection('contenu')























