<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestIDController;

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

Route::get('testid/{id}/{name}', [TestIDController::class, 'testID']);

Route::get('signup', [SignupController::class, 'get']);
Route::post('signup', [SignupController::class, 'post']);

Route::get('product', [ProductController::class, 'list']);
Route::get('product/{id}', [ProductController::class, 'list']);
Route::get('add', [ProductController::class, 'adđview']);
Route::get('delete/{id}', [ProductController::class, 'delete']);


// Middleware 
Route::get('/login', function () {
    return view('login');
});

Route::get('/ok', function () {
    session()->put("LOGGED_IN", true);
});


Route::get('/logout', [LogoutController::class, 'index']);


Route::group(["middleware" => "mygroup"], function(){
    Route::view('/admin', 'admin');
    Route::view('/profile', 'profile');
});

// upload file img
Route::get('/upload', [UploadController::class, 'index']);

Route::post('/upload', [UploadController::class, 'upload']);


Route::get('/save', [ProductController::class, 'addview']);
Route::post('/save', [ProductController::class, 'add']);


