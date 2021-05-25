@extends('template')
@section('contenu')
     <h2>Créer un nouveau enseignant</h2></br></br>
  
     <a class="btn btn-primary" href="{{url('index2')}}">Retour</a></br>
   

<form action="{{route('index2.store')}}" method="POST">
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
      <td><strong>Code:</strong></td>
	  <td><input type="number_format" name="code" value="{{old('code')}}" placeholder="code"/></td>
	  </tr>
	    <tr>
      <td><strong>Grade:</strong></td>
	  <td>	  
<?php
// connexion à la base
$Host = "127.0.0.1";
$User = "root";
$Password = "";
$Database = "laravel";

$idConnect = mysqli_connect( $Host, $User, $Password)
             or die( "Connexion impossible.");
$db = mysqli_select_db( $idConnect, $Database)
             or die( "Accès base impossible.");
// Requête SQL
$rqSql = "SELECT grade from enseignants";
// Exécution de la requête
$result = mysqli_query( $idConnect, $rqSql)
             or die( "Exécution requête impossible.");
mysqli_close( $idConnect);

// Construction de la chaîne de caractères qui fait la // liste


$ld = "<SELECT NAME='grade'>";
$ld .= "<OPTION VALUE=1>PR</OPTION>";
$ld .= "<OPTION VALUE=2>MCF</OPTION>";
$ld .= "<OPTION VALUE=3>Contractuel</OPTION>";

// On boucle sur la table
while ( $row = mysqli_fetch_array( $result)) {
    // $row est un tableau associatif
    // les éléments sont «indicés» par les noms
    // des colonnes. Je préfère cette technique à celle
    // des indices numériques..on ajoute une colonne..
    $mumDep = $row["numDep"];
    $nomDep = $row["nomDep"];
	$nomDep = $row["nomDep"];
    $ld .= "<OPTION VALUE='$numDep'>$nomdep</OPTION>";
}
$ld .= "</SELECT>";
//mysqli_close( $idConnect);
?>
	  
<?php
print $ld;
?>	  
	  
	  
	  </td>
	 </tr>  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <tr>
	  <td><strong>Téléphone:</strong></td>
	  <td><input type="tel" name="tel" value="{{old('tel')}}" placeholder="téléphone"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td><strong>Mail:</strong></td>
	  <td><input type="mail" name="mail" value="{{old('login')}}" placeholder="mail"/></td>
	  </tr>
	  
	  
	  <tr>
	  <td><strong>Numero de bureau:</strong></td>
	  <td><input type="number_format" name="numB" value="{{old('numB')}}" placeholder="numero bureau"/></td>
      </tr>
	  
	  </table>

 <button type="submit" class="btn btn-primary">Valider</button>
</form>
@endsection('contenu')























