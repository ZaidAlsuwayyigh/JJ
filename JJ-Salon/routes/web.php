<?php

use App\Http\Controllers\UserAppointment\UserController;
use App\Http\Controllers\User\AppointmentController;

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

    return view('welcome');
});

// this is how they use routes in laravel 5.8.*
// Route::get('/test', 'TestController@index')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return 'you are admin';
})->middleware(['auth', 'auth.admin']);




Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
  Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']] );
});

// Route::namespace('UserAppointment')->prefix('user')->name('user.')->group(function(){
//   Route::get('/show', 'UserController')->name('user');
// });





// this is the Appointment controller

Route::get('/appointments', 'User\AppointmentController@index');
