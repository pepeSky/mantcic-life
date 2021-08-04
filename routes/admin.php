<?php


use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AccoutingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
Use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;

Route::get('/',[AdminController::class,'index'])->middleware('can:Ver Panel Control')->name('home');

Route::resource('accouting',AccoutingController::class)->names('accouting');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('users');

Route::get('services', [ServiceController::class, 'index'])->name('services.index');

Route::get('services/{service}', [ServiceController::class, 'show'] )->name('services.show');

Route::post('services/{service}/approved', [ServiceController::class, 'approved'] )->name('services.approved');
