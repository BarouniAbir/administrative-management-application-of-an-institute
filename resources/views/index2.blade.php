@extends('template')
@section('titre')
Enseignant
@endsection
@section('contenu')

     <h2>Tableaux des enseignants</h2>
  
     <a class="btn btn-succes" href="{{route('index2.create')}}">Créer un nouveau enseignant</a>
  
@if($message=Session::get('success'))
	<div class="alert alert-success">
       <p>{{$message}}</p>
     </div>
@endif
<table border=1>
 <tr>
 <th style="text-align: center" width="200px">Nom</th>
 <th style="text-align: center" width="200px">Prenom</th>
 <th style="text-align: center" width="200px">Code</th>
 <th style="text-align: center" width="200px">Grade</th>
 <th style="text-align: center" width="200px">Téléphone</th>
 <th style="text-align: center" width="200px">Mail</th>
 <th style="text-align: center" width="200px">Numero de bureau</th>
 <th style="text-align: center" width="200px" height="50px">Action</th>
 </tr>
 @foreach ($Enseignants as $Enseignant)
 <tr>
 <td style="text-align: center" width="200px" height="30px">{{$Enseignant->nom}}</td>
  <td style="text-align: center" width="200px" height="30px">{{$Enseignant->prenom}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Enseignant->code}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Enseignant->grade}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Enseignant->tel}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Enseignant->mail}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Enseignant->numB}}</td>
    <td style="text-align: center" width="250px" height="30px">
	 <form action="{{url('index2',$Enseignant->id)}}" method="POST">
	     <a class="btn btn-info" href="{{route('index2.show',$Enseignant->id)}}">Voir</a>
         <a class="btn btn-primary" href="{{route('index2.edit',$Enseignant->id)}}">Modifier</a>
	@csrf
	@method('DELETE')
	<button type="submit" class="btn btn-danger">Supprimer</button>
	</form>
	</td>
 </tr>
@endforeach
</table>
@endsection






















