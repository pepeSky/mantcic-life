<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Welcome\DocumentationController;


Route::get('/',[DocumentationController::class, 'index'])->name('documents.home');
