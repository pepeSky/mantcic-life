<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovedService;

class ServiceController extends Controller
{
    public function index(){

        $services = Service::where('status', 2)->paginate();

        return view('admin.services.index', compact('services'));
    }

    public function show(Service $service){

        $this->authorize('revision', $service);

        return view('admin.services.show', compact('service'));
    }

    public function approved(Service $service){

        if(!$service->activities || !$service->goals || !$service->requirements || !$service->image){
                return back()->with('info', 'no se puede publicar un servicio que no este completa');
        }

        $service->status = 3;
        $service->save();

        // Enviar correo electronico

        $mail = new ApprovedService();

        Mail::to($service->worker->email)->send($mail);


        return redirect()->route('admin.home.index')->with('info', 'El servicio se publico con exito');
    }
}
