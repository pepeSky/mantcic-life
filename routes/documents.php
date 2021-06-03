<?php

use App\Http\Controllers\Document\DocumentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[DocumentController::class, 'index'])->name('documents.home');