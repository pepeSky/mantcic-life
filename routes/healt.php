<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Welcome\DocumentationController;


Route::get('/',function(){
    return 'vista de ruta salud';
})->name('home');
