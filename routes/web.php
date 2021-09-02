<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// ------------------user registration-------------------
Route::get('/', [UserRegistrationController::class, 'login']);
Route::get('/registration', [UserRegistrationController::class, 'registration']);

Route::get('/account-register', [UserRegistrationController::class, 'form_one']);
Route::post('/form-one', [UserRegistrationController::class, 'form_one_post']);

Route::get('/form-two', [UserRegistrationController::class, 'form_two']);
Route::post('/form-two', [UserRegistrationController::class, 'form_two_post']);

Route::get('/form-three', [UserRegistrationController::class, 'form_three']);
Route::post('/form-three', [UserRegistrationController::class, 'form_three_post']);

Route::get('/form-four', [UserRegistrationController::class, 'form_four']);
Route::post('/form-four', [UserRegistrationController::class, 'form_four_post']);
