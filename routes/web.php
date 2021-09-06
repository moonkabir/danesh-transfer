<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\UserDashboard;
use App\Http\Controllers\ReceiverController;

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

Route::get('/admin/dashboard', [UserDashboard::class, 'Admin_Dashboard'])
->middleware(['auth']);

Route::get('/dashboard',[UserDashboard::class, 'Dashboard'])
->middleware(['auth'])
->name('dashboard');

// --------admin panel users list---------
Route::get('/admin/users',[UserDashboard::class, 'dashboard_all_users'])
->middleware(['auth'])
->name('users');
Route::get('/admin/user-details/{id}',[UserDashboard::class, 'user_details'])
->middleware(['auth']);
Route::get('/admin/user-edit/{id}',[UserDashboard::class, 'user_edit'])
->middleware(['auth']);
Route::post('/admin/user-edit/{id}',[UserDashboard::class, 'user_edit_action'])
->middleware(['auth']);
Route::get('/admin/user-delete/{id}',[UserDashboard::class, 'user_delete'])
->middleware(['auth']);

// --------user registration---------
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
// ------------- user reciever---------
Route::get('/user/receivers', [ReceiverController::class, 'all_receivers'])
    ->middleware(['auth'])
    ->name('receivers');
Route::get('/user/create-receiver/', [ReceiverController::class, 'create_receiver'])
    ->middleware(['auth']);
Route::post('/user/create-receiver/', [ReceiverController::class, 'create_receiver_post'])
    ->middleware(['auth']);
Route::get('/user/receiver-update/{id}', [ReceiverController::class, 'receiver_update'])
    ->middleware(['auth']);
Route::post('/user/receiver-update/{id}', [ReceiverController::class, 'receiver_update_action'])
    ->middleware(['auth']);
Route::get('/user/receiver-delete/{id}', [ReceiverController::class, 'receiver_delete'])
    ->middleware(['auth']);



require __DIR__.'/auth.php';
