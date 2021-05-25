<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diplome;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Diplomes=Diplome::all();
		return view('index4',compact('Diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create4');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Diplome::create($request->all());
		return redirect('index4')->with('success','Le diplome a été bien créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Diplome = Diplome::where('id', $id)->firstOrFail();
        return view('show4', compact('Diplome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Diplome =Diplome::findOrFail($id);
		 return view('edit4', compact('Diplome'));
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
       $Diplome = Diplome::findOrFail($id);
       $Diplome->update($request->all());
	   return redirect('index4')->with('success','Le diplome a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $Diplome = Diplome::findOrFail($id);
		   $Diplome->delete();

	  //post::destroy($id);
   return redirect('index4')->with('success','Le diplome a été bien supprimé');
    }
}
