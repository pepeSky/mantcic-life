<?php

namespace App\Http\Controllers\Mantenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
