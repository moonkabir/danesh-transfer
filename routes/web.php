<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\UserDashboard;

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
    return view('auth.login');
});
Route::get('/dashboard',[UserDashboard::class, 'Dashboard'])
->middleware(['auth'])
->name('dashboard');

Route::get('/information-register',[UserRegistrationController::class, 'information_register'])
->middleware(['auth'])
->name('information-register');
Route::post('/information-register',[UserRegistrationController::class, 'information_register_post'])
->middleware(['auth'])
->name('information-register');

Route::get('/id-register',[UserRegistrationController::class, 'id_register'])
->middleware(['auth'])
->name('id-register');
Route::post('/id-register',[UserRegistrationController::class, 'id_register_post'])
->middleware(['auth'])
->name('id-register');

Route::get('/upload-id',[UserRegistrationController::class, 'upload_id'])
->middleware(['auth'])
->name('upload-id');
Route::post('/upload-id',[UserRegistrationController::class, 'upload_id_post'])
->middleware(['auth'])
->name('upload-id');

require __DIR__.'/auth.php';
