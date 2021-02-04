<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/welcome', 'welcome');
Auth::routes();

//********************************GET********************************
//LoginController
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin_login');
Route::get('/login/doctor', 'Auth\LoginController@showDoctorLoginForm')->name('doctor_login');

//RegisterController
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('admin_register');
Route::get('/register/doctor', 'Auth\RegisterController@showDoctorRegisterForm')->name('doctor_register');

//DoctorController
Route::get('/doctor', 'DoctorController@doctorDashboard')->name('doctor_dashboard');

//AdminController
Route::get('/admin', 'AdminController@adminDashboard')->name('admin_dashboard');

//HomeController
Route::get('/user', 'HomeController@index')->name('user_dashboard');
Route::resource('user', 'HomeController');

//********************************POST********************************
//LoginController
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin_login');
Route::post('/login/doctor', 'Auth\LoginController@doctorLogin')->name('doctor_login');

//RegisterController
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin_register');
Route::post('/register/doctor', 'Auth\RegisterController@createDoctor')->name('doctor_register');