<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GestionPpSky\Category;
use App\Models\GestionPpSky\Sector;

class CategoryController extends Controller
{

    public function __construct()
    {
        //$this->middleware('can:admin.categorias.index')->only('index');
        //$this->middleware('can:admin.categorias.create')->only('create','store');
        //$this->middleware('can:admin.categorias.edit')->only('edit','update');
        //$this->middleware('can:admin.categorias.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::pluck('name','id');

        return view('admin.categories.create', compact('sectors'));
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
            'slug' => 'required|unique:categories',
            'sector_id' => 'required'
        ]);

        $category = Category::create($request->all());

        return redirect()->route('admin.categories.index')->with('info','La categoría se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categorias.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $sectors = Sector::pluck('name','id');

        return view('admin.categories.edit', compact('category', 'sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'adjective' => 'required',
            'slug' => "required|unique:categories,slug,$category->id",
            'sector_id' => 'required'
        ]);

        $category->update($request->all());

        return redirect()->route('admin.categories.index')->with('info','La Categoría se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('info','La categoría se elimino con exito');
    }
}
