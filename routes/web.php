<?php

use App\Http\Controllers\Site\InputController;
use App\Http\Controllers\Site\ProcessController;
use App\Http\Controllers\Site\ReportController;
use App\Http\Controllers\Site\UnitController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('inputs',InputController::class)->names('web.inputs');

Route::resource('units',UnitController::class)->names('web.units');

Route::resource('processes',ProcessController::class)->names('web.processes');

Route::resource('reports',ReportController::class)->names('web.reports');

Route::get("/test-admin", function() {
    return view("admin");
});

Route::get("/test-doc", function() {
    return view("layouts.document");
});