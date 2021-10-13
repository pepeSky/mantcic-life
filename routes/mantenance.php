<?php

use App\Http\Controllers\Dashboard\Mantenance\ServiceController;
use App\Http\Controllers\Dashboard\Mantenance\InputController;
use App\Http\Controllers\Dashboard\Mantenance\UnitController;
USE App\Http\Controllers\Dashboard\Mantenance\ProcessController;
use App\Http\Controllers\Dashboard\Mantenance\ReportController;
use App\Http\Livewire\Dashboard\Mantenance\ServicesCurriculum;
use App\Http\Livewire\Dashboard\Mantenance\ServicesJobs;
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

Route::resource('inputs',InputController::class)->names('inputs');

Route::resource('units',UnitController::class)->names('units');

Route::resource('processes',ProcessController::class)->names('processes');

Route::resource('reports',ReportController::class)->names('reports');



Route::get('services/{service}/curriculum', ServicesCurriculum::class)->name('services.curriculum');

route::get('services/{service}/goals',[ServiceController::class, 'goals'])->name('services.goals');

route::get('services/{service}/jobs',ServicesJobs::class)->name('services.jobs');

route::post('services/{service}/status',[ServiceController::class, 'status'])->name('services.status');


