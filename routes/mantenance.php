<?php

use App\Http\Controllers\Mantenance\ServiceController;
use App\Http\Controllers\Mantenance\InputController;
use App\Http\Controllers\Mantenance\UnitController;
use App\Http\Livewire\Mantenance\ServicesCurriculum;
use App\Http\Livewire\Mantenance\ServicesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::redirect('', 'mantenance/services');

Route::resource('services', ServiceController::class)->names('services');

Route::get('services/{service}/curriculum', ServicesCurriculum::class)->middleware('can:Actualizar Actividades')->name('services.curriculum');

route::get('services/{service}/goals',[ServiceController::class, 'goals'])->name('services.goals');

route::get('services/{service}/jobs',ServicesJobs::class)->middleware('can:Actualizar Actividades')->name('services.jobs');

route::post('services/{service}/status',[ServiceController::class, 'status'])->name('services.status');


Route::resource('inputs',InputController::class)->names('inputs');

Route::resource('units',UnitController::class)->names('units');

Route::resource('processes',ProcessController::class)->names('processes');

Route::resource('reports',ReportController::class)->names('reports');
