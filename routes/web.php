<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;

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
});

Route::get('/view', [ProductController::class, 'view']);
Route::get('/add', [ProductController::class, 'getadd']); //get
Route::post('/add', [ProductController::class, 'postadd']); //post
Route::get('/delete/{id}', [ProductController::class, 'delete']);
Route::get('/edit/{id}', [ProductController::class, 'edit']); //get
Route::post('/update', [ProductController::class, 'update']); //post
Route::get('/detail/{id}', [ProductController::class, 'detail']);







