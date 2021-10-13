<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GestionPpSky\Science;

class ScienceController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sciences = Science::all();

        return view('admin.sciences.index', compact('sciences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sciences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'adjective' => 'required',
            'state'=>'required',
            'slug' => 'required|unique:sciences',
        ]);

        $science = Science::create($request->all());

        return redirect()->route('admin.sciences.index')->with('info','La ciencia se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Science $science)
    {
        return view('admin.sciences.show',compact('science'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Science $science)
    {
        return view('admin.sciences.edit', compact('science'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Science $science)
    {

        $request->validate([
            'name' => 'required',
            'adjective' => 'required',
            'state'=>'required',
            'slug' => "required|unique:sciences,slug,$science->id"
        ]);


            $science->update($request->all());

        return redirect()->route('admin.sciences.index')->with('info','La Ciencia se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Science $science)
    {
        $science->delete();

        return redirect()->route('admin.sciences.index')->with('info','La Ciencia se elimino con exito');
    }

}
