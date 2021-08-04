<?php

namespace App\Http\Controllers\Mantenance;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:Leer Servicios')->only('index');
        $this->middleware('can:Crear Servicios')->only('create', 'store');
        $this->middleware('can:Editar Servicios')->only('edit', 'update', 'goals');
        $this->middleware('can:Eliminar Servicios')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mantenance.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $levels = Level::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');

        return view('mantenance.services.create', compact('categories', 'levels', 'prices'));
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
            'title' => 'required',
            'slug' => 'required|unique:services',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);

        $service = Service::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put(['services', $request->file('file')]);

            $service->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('upkeep.services.edit', $service);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('mantenance.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {

        $this->authorize('dicatated', $service);

        $categories = Category::pluck('name', 'id');
        $levels = Level::pluck('name', 'id');
        $prices = Price::pluck('name', 'id');


        return view('mantenance.services.edit', compact('service', 'categories', 'levels', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('dicatated', $service);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:services, slug,' . $service->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);

        $service->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('services', $request->file('file'));

            if ($service->image) {
                Storage::delete($service->image->url);

                $service->image->update([
                    'url' => $url
                ]);
            } else {
                $service->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('upkeep.services.edit', $service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function goals(Service $service){

        $this->authorize('dicatated', $service);

        return view('mantenance.services.goals', compact('service'));
    }

    public function status(Service $service){

        $service->status = 2;
        $service->save();

        return back();
    }



}
