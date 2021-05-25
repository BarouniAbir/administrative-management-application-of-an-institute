@extends('template')
@section('titre')
Diplomes
@endsection
@section('contenu')

     <h2>Tableaux des diplomes</h2>
  
     <a class="btn btn-succes" href="{{route('index4.create')}}">Créer un nouveau diplome</a>
  
@if($message=Session::get('success'))
	<div class="alert alert-success">
       <p>{{$message}}</p>
     </div>
@endif
<table border=1>
 <tr>
 <th style="text-align: center" width="200px">Nom</th>
 <th style="text-align: center" width="200px">Liste des cours</th>
 <th style="text-align: center" width="200px" height="50px">Action</th>
 </tr>
 @foreach ($Diplomes as $Diplome)
 <tr>
 <td style="text-align: center" width="200px" height="30px">{{$Diplome->nom}}</td>
  <td style="text-align: center" width="200px" height="30px">{{$Diplome->listCours}}</td>
    <td style="text-align: center" width="250px" height="30px">
	 <form action="{{url('index4',$Diplome->id)}}" method="POST">
	     <a class="btn btn-info" href="{{route('index4.show',$Diplome->id)}}">Voir</a>
         <a class="btn btn-primary" href="{{route('index4.edit',$Diplome->id)}}">Modifier</a>
	@csrf
	@method('DELETE')
	<button type="submit" class="btn btn-danger">Supprimer</button>
	</form>
	</td>
 </tr>
@endforeach
</table>
@endsection






















