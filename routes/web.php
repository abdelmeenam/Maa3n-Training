<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoriesController;

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




Route::get('admin/categories', [CategoriesController::class, 'index']);

Route::get('admin/categories/create', [CategoriesController::class, 'create']);
Route::post('admin/categories', [CategoriesController::class, 'store']);


Route::get('admin/categories/{id}', [CategoriesController::class, 'edit']);
Route::put('admin/categories/{id}', [CategoriesController::class, 'update']);
