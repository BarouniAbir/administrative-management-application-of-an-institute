<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Enseignants=Enseignant::all();
		return view('index2',compact('Enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Enseignant::create($request->all());
		return redirect('index2')->with('success','L\'enseignant a été bien créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
		   $Enseignant = Enseignant::where('id', $id)->firstOrFail();
           return view('show2', compact('Enseignant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Enseignant =Enseignant::findOrFail($id);
		return view('edit2', compact('Enseignant'));
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
        
        $Enseignant = Enseignant::findOrFail($id);
        $Enseignant->update($request->all());
		 return redirect('index2')->with('success','L\'enseignant a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $Enseignant = Enseignant::findOrFail($id);
		   $Enseignant->delete();

	  //post::destroy($id);
   return redirect('index2')->with('success','L\'enseignant a été bien supprimé');
    }
}
