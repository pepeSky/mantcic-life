<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mantenance\Service;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();

        return view('welcome', compact('services'));
    }
}
