<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\CommunityNewsController;
use App\Http\Controllers\CommunityStaffController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsGeneralController;
use App\Http\Controllers\SettingsMailController;
use App\Http\Controllers\SettingsPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidationController;
use App\Http\Middleware\SessionToken;

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
Route::post('/login', [LoginController::class, 'login'])->withoutMiddleware([SessionToken::class]);
Route::get('/me', [HomeController::class, 'me']);

# Client
Route::get('/client', [ClientController::class, 'loading']);
Route::get('/client-update-news', [ClientController::class, 'updateHotelViewNews']);

Route::get('/logout', [LogoutController::class, 'logout']);
Route::post('/change-motto', [HomeController::class, 'changeMotto']);
Route::get('/profile/{username?}', [ProfileController::class, 'show']);

# General settings
Route::get('/general-settings', [SettingsGeneralController::class, 'show']);
Route::post('/save-general-settings', [SettingsGeneralController::class, 'save_general_settings']);
# Mail settings
Route::get('/email-settings', [SettingsMailController::class, 'show']);
Route::post('/change-email', [SettingsMailController::class, 'change_email_address']);
# Password settings
Route::get('/password-settings', [SettingsPasswordController::class, 'show']);
Route::post('/change-password', [SettingsPasswordController::class, 'change_password']);

# Community - News
Route::get('/staffs', [CommunityStaffController::class, 'show']);
# Community - Staffs
Route::get('/news', [CommunityNewsController::class, 'show']);

# Staff - Inicial
Route::get('/admin/cms', [CMSController::class, 'index']);

# Staff - Usuários
Route::get('/admin/cms/users', [UserController::class, 'listUsers']);
Route::get('/admin/cms/user/{id}', [UserController::class, 'retrieveUser']);

# Staff - Notícias
Route::get('/admin/cms/news', [NewsController::class, 'index']);
Route::get('/admin/cms/new/{id}', [NewsController::class, 'retrieveNew']);