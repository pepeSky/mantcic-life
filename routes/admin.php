<?php

use App\Http\Controllers\Admin\AccoutingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Route::get('/',[AdminController::class,'index'])->name('admin.home');

Route::resource('/accouting',AccoutingController::class)->names('admin.accouting');