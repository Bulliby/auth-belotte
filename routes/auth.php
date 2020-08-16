
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'LoginController@login')->name('login');
Route::post('/register', 'RegisterController@register')->name('register');
Route::post('/register/login', 'RegisterController@checkLogin')->name('check-login');
Route::post('/register/email', 'RegisterController@checkEmail')->name('check-email');
Route::post('/forgotpassword', 'ForgotPasswordController@forgot')->name('forgot-password');
