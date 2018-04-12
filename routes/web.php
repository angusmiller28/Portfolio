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

Route::get('/','SearchController@index');

Route::get('/search','SearchController@search');


Route::get('/resume', 'ResumeController@index');

// store
Route::get('/store', 'StoreController@index');

// product
Route::get('/product/{id}', 'ProductController@show');
Route::post('/product/{id}', 'CartController@add')->name('products.add');

// cart
Route::get('/cart', 'CartController@index');
Route::post('/cart/{id}', 'CartController@updateQuantity')->name('products.update.quantity');
Route::post('/cart', 'CartController@remove')->name('products.remove');

// checkout
Route::post('/checkout', 'CheckoutController@index')->name('checkout');

// order
Route::get('/order', 'OrderController@index')->name('order');

// payment
Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/payment', 'PaymentController@payWithStripe')->name('payment.stripe');

// order confirmation
Route::get('/order-confirmation', 'OrderConfirmationController@index')->name('order-confirmation');

Auth::routes();
Route::post('/register', 'Auth\RegisterController@store');
Route::resource('/resumes', 'ResumeController');

// Blog Routes
Route::resource('/blogs', 'BlogController');
Route::get('/blogs/blog/{id}', 'BlogController@show');

// Comments
Route::post('/comments/{id}', 'CommentsController@store')->name('comments.store');


Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::post('/admin', 'Auth\AdminRegisterController@store')->name('admin.register.submit');
// Route::post('/admin', 'ResumeController@store')->name('resume.add.submit');
// Route::post('/admin', 'ResumeController@update')->name('resume.update.submit');


Route::group(['middleware' => ['auth:admin']], function () {
  // Only authenticated admins may enter...
  Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
  Route::post('/admin', 'Auth\AdminRegisterController@store');
  Route::get('/admin/profile', 'AdminController@profile');
  Route::post('/admin/profile', 'AdminController@update_avatar')->name('admin.profile.update.image.submit');
  Route::get('/admin/profile/{id}', 'AdminController@show');
  Route::get('/admin/logout', '\App\Http\Controllers\Auth\LoginController@logout');
  Route::delete('/admin/profile/{id}', 'AdminController@destroy');
});


Route::group(['middleware' => ['auth']], function () {
  // Only authenticated profile may enter...
  Route::get('/profile', 'UserController@profile')->name('profile');
  Route::post('/profile', 'UserController@update_avatar')->name('profile.update.image.submit');
  Route::delete('/profile', 'UserController@delete');
  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
  Route::delete('profile/{id}', 'UserController@delete');
});




Route::resource('/projects', 'ProjectController');
Route::get('/projects/project/{id}', 'ProjectController@show');

Route::resource('/users', 'UserController');
Route::get('/users/user/{id}', 'UserController@show');





// Route::prefix('admin')->group(function(){
//   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//   Route::post('/admin', array('uses' => 'BlogController@store'));
//   Route::get('/', 'UserController@index');
//   Route::get('/', 'AdminController@index')->name('admin.dashboard');
// });
