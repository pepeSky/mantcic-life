<?php

use App\Http\Controllers\Welcome\WelcomeController;
use App\Http\Controllers\Welcome\ServicesController;
use App\Http\Controllers\Welcome\StoreController;
use App\Http\Controllers\Welcome\ContactController;
use App\Http\Livewire\ServiceStatus;
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

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/welcome', WelcomeController::class)->name('welcome.services');

Route::get('services', [ServicesController::class, 'index'])->name('services.index');

Route::get('services/{service}', [ServicesController::class, 'show'])->name('services.show');

Route::post('services/{service}/enrolled',[ServicesController::class,'enrolled'])->middleware('auth')->name('services.enrolled');

Route::get('services-status/{service}',ServiceStatus::class)->name('services.status');

Route::get('stores', [StoreController::class, 'index'])->name('stores.index');

Route::get('reports', [ReportController::class, 'index'])->name('reports.index');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');


