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

Route::get('/resume', 'ResumeController@index');


Auth::routes();
Route::post('/register', 'Auth\RegisterController@store');

Route::resource('/resumes', 'ResumeController');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::post('/admin', 'Auth\AdminRegisterController@store')->name('admin.register.submit');
// Route::post('/admin', 'ResumeController@store')->name('resume.add.submit');
// Route::post('/admin', 'ResumeController@update')->name('resume.update.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');


Route::resource('/projects', 'ProjectController');
Route::get('/projects/project/{id}', 'ProjectController@show');

Route::resource('/blogs', 'BlogController');
Route::get('/blogs/blog/{id}', 'BlogController@show');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/profile', 'UserController@update_avatar')->name('profile.update.image.submit');
Route::delete('/profile', 'UserController@delete');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/admin', 'Auth\AdminRegisterController@store');

Route::get('/admin/profile', 'AdminController@profile');
Route::post('/admin/profile', 'AdminController@update_avatar')->name('admin.profile.update.image.submit');
Route::get('/admin/profile/{id}', 'AdminController@show');
Route::delete('/admin/profile/{id}', 'AdminController@destroy');

Route::resource('/users', 'UserController');
Route::get('/users/user/{id}', 'UserController@show');
Route::delete('profile/{id}', 'UserController@delete');





// Route::prefix('admin')->group(function(){
//   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//   Route::post('/admin', array('uses' => 'BlogController@store'));
//   Route::get('/', 'UserController@index');
//   Route::get('/', 'AdminController@index')->name('admin.dashboard');
// });
