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

Route::get('/', function () {
    return view('welcome');
});




Route::resource('/projects', 'ProjectController');
Route::get('/projects/project/{id}', 'ProjectController@show');

Route::resource('/blogs', 'BlogController');
Route::get('/blogs/blog/{id}', 'BlogController@show');

Route::resource('/users', 'UserController');
Route::get('/users/user/{id}', 'UserController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.log');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::post('/admin', array('uses' => 'BlogController@store'));
  Route::get('/', 'UserController@index');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
