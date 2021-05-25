<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cours=Cours::all();
		return view('index3',compact('Cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create3');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Cours::create($request->all());
		return redirect('index3')->with('success','Le cours a été bien créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $Cours = Cours::where('id', $id)->firstOrFail();
           return view('show3', compact('Cours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cours =Cours::findOrFail($id);
		return view('edit3', compact('Cours'));
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
       $Cours = Cours::findOrFail($id);
       $Cours->update($request->all());
	return redirect('index3')->with('success','Le cours a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $Cours = Cours::findOrFail($id);
		        $Cours->delete();

	  //post::destroy($id);
      return redirect('index3')->with('success','Le cours a été bien supprimé');
    
    }
}
