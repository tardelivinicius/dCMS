<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ValidationController;
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

Route::get('/', [IndexController::class, 'main']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register-step2', [RegisterController::class, 'register_step2']);
Route::post('/finish-register', [RegisterController::class, 'finish_register']);
route::get('/register-success', [RegisterController::class, 'register_success']);
Route::post('/check-email-exists', [ValidationController::class, 'check_email_exists']);
Route::post('/check-username-exists', [ValidationController::class, 'check_username_exists']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/me', [HomeController::class, 'me']);
Route::get('/client', [ClientController::class, 'loading']);

