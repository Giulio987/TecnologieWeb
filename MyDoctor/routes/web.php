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

Route::view('/', 'welcome');
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
Route::get('/admin/doctor', 'AdminController@indexDoctor');
Route::get('/admin/user', 'AdminController@indexUser');
Route::get('/admin/prescription', 'AdminController@indexPres');
Route::get('/admin/visit', 'AdminController@indexVisit');

//HomeController
Route::get('/home', 'HomeController@index')->name('user_dashboard');
Route::resource('/home/visit', 'VisitController')->except('update', 'show', 'edit');

//********************************POST********************************
//LoginController
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin_login');
Route::post('/login/doctor', 'Auth\LoginController@doctorLogin')->name('doctor_login');

//RegisterController
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin_register');
Route::post('/register/doctor', 'Auth\RegisterController@createDoctor')->name('doctor_register');

//PrescriptionController
Route::resource('/doctor/prescription', 'PrescriptionController');


