<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
//home routes

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('blog', [HomeController::class, 'blog']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('project', [HomeController::class, 'project']);


//end home routes

//admin routes

Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/projects', [AdminController::class, 'projects']);
Route::get('admin/blogs', [AdminController::class, 'blogs']);
Route::get('admin/subscribers', [AdminController::class, 'subscribers']);
Route::post('admin/store-subscribers', [AdminController::class, 'strore_subscribers']);
//Auth
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'login_action']);

Route::get('forgot-password', [LoginController::class, 'forgot_password']);

Route::get('logout', [LoginController::class, 'logout']);
Route::get('register', [LoginController::class, 'register']);
Route::post('register', [LoginController::class, 'register_action']);

