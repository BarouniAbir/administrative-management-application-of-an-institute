@extends('template')
@section('titre')
Cours
@endsection
@section('contenu')

     <h2>Tableaux des cours</h2>
  
     <a class="btn btn-succes" href="{{route('index3.create')}}">Créer un nouveau Cours</a>
  
@if($message=Session::get('success'))
	<div class="alert alert-success">
       <p>{{$message}}</p>
     </div>
@endif
<table border=1>
 <tr>
 <th style="text-align: center" width="200px">Code</th>
 <th style="text-align: center" width="200px">Description</th>
 <th style="text-align: center" width="200px">Nombre d'heures</th>
 <th style="text-align: center" width="250px">Coefficient dans le diplôme</th>
 <th style="text-align: center" width="250px">Coefficient de l’examen final</th>
 <th style="text-align: center" width="200px">Coefficient de TD</th>
 <th style="text-align: center" width="200px" height="50px">Action</th>
 </tr>
 @foreach ($Cours as $Cours)
 <tr>
 <td style="text-align: center" width="200px" height="30px">{{$Cours->code}}</td>
  <td style="text-align: center" width="200px" height="30px">{{$Cours->description}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Cours->nbrHeure}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Cours->coeffDiplome}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Cours->coeffExam}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Cours->coeffTD}}</td>
    <td style="text-align: center" width="250px" height="30px">
	 <form action="{{url('index3',$Cours->id)}}" method="POST">
	     <a class="btn btn-info" href="{{route('index3.show',$Cours->id)}}">Voir</a>
         <a class="btn btn-primary" href="{{route('index3.edit',$Cours->id)}}">Modifier</a>
	@csrf
	@method('DELETE')
	<button type="submit" class="btn btn-danger">Supprimer</button>
	</form>
	</td>
 </tr>
@endforeach
</table>
@endsection






















