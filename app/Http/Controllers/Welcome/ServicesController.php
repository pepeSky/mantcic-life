<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mantenance\Service;

class ServicesController extends Controller
{
    public function index(){
        return view('welcome.services.index');
    }

    public function show(Service $service){

        $services = Service::where('category_id', $service->category_id)
                            ->where('id','!=', $service->id)
                            ->where('status', 3)
                            ->latest('id')
                            ->take(5)
                            ->get();


        return view('welcome.services.show', compact('service','services'));
    }

    public function enrolled(Service $service){

        $service->clients()->attach(auth()->user()->id);

        return redirect()->route('services.status', $service);
    }

}
