<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Etudiants=Etudiant::all();
		return view('index',compact('Etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Etudiant::create($request->all());
		return redirect('index')->with('success','L\'étudiant a été bien créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*return view('show')->with('Etudiant',$Etudiant->code);
		/*return view('index',[‘articlee’=>$Etudiant]);*/
		 $Etudiant = Etudiant::where('id', $id)->firstOrFail();
   return view('show', compact('Etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $Etudiant =Etudiant::findOrFail($id);
			return view('edit', compact('Etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $Etudiant = Etudiant::findOrFail($id);
        $Etudiant->update($request->all());
         //Etudiant::where('id', $id)->update($validatedData);
		  return redirect('index')->with('success','L\'étudiant a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $Etudiant = Etudiant::findOrFail($id);
		   $Etudiant->delete();

	  //post::destroy($id);
   return redirect('index')->with('success','L\'étudiant a été bien supprimé');
    }
}
