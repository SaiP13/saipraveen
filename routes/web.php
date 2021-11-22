<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get('admin', [AdminController::class, 'index']);


//Auth
Route::get('/', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'login_action']);
Route::get('logout', [LoginController::class, 'logout']);
Route::get('register', [LoginController::class, 'register']);
Route::post('register', [LoginController::class, 'register_action']);
