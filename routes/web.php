<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\RouteController;

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
    return view('pages.home');
});

Route::get('/home', [MainController::class, 'home']);
Route::post('/store-data', [StoreController::class, 'store']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/projects', [MainController::class, 'project']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/projects/hr', [RouteController::class, 'hr']);
Route::get('/projects/landing-page', [RouteController::class, 'landing']);
Route::get('/projects/short-url', [RouteController::class, 'short']);
Route::get('/projects/find-country', [RouteController::class, 'country']);
// Route::get('/home', [MainController::class, 'about']);
