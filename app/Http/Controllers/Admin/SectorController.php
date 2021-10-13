<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GestionPpSky\Science;
use App\Models\GestionPpSky\Branch;
use Illuminate\Http\Request;
use App\Models\GestionPpSky\Sector;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::all();

        return view('admin.sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::pluck('name','id');

        return view('admin.sectors.create', compact('branches'));
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
            'slug' => 'required|unique:branches',
            'branch_id' => 'required'
        ]);

        $sectors = Sector::create($request->all());

        return redirect()->route('admin.sectors.index')->with('info','El sector se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sector $sector)
    {
        return view('admin.sectors.show', compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sector $sector)
    {
        $branches = Branch::pluck('name','id');

        $sectors = $sector;

        return view('admin.sectors.edit', compact('sectors','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Sector $sector)
    {

        $request->validate([
            'name' => 'required',
            'adjective' => 'required',
            'slug' => "required|unique:sectors,slug,$sector->id",
            'branch_id' => 'required'
        ]);

        $sector->update($request->all());

        return redirect()->route('admin.sectors.index')->with('info','El sector se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sector $sector)
    {
        $sector->delete();

        return redirect()->route('admin.sectors.index')->with('info','El Sector se elimino con exito');
    }
}
