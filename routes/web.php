<?php

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

// Change Password
Route::get('/change-password', 'HomeController@PasswordIndex')->name('change-password');

Route::post('reset', 'HomeController@resetPassword');

Auth::routes();
//User's information and User's list 
Route::get('/home', 'HomeController@index')->name('home');
Route::redirect('/', 'login');
Route::redirect('/registration', 'register');
