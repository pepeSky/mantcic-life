<?php


use Illuminate\Support\Facades\Route;

/*** Controladores Gestión PepeSky ***/

use App\Http\Controllers\Admin\ScienceController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;


use App\Http\Controllers\Dashboard\Accounting\AccoutingController;

Route::get('/', [AdminController::class, 'index'])->name('home');

Route::resource('accouting', AccoutingController::class)->names('accouting');
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');
Route::get('services', [ServiceController::class, 'index'])->name('services.index');
Route::get('services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::post('services/{service}/approved', [ServiceController::class, 'approved'])->name('services.approved');


Route::resource('sciences', ScienceController::class)->names('sciences');
Route::resource('branches', BranchController::class)->names('branches');
Route::resource('sectors', SectorController::class)->names('sectors');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('subcategories', SubcategoryController::class)->names('subcategories');
Route::resource('tags', TagController::class)->names('tags');

