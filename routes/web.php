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
    return view('home');
});



  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

  Route::get('/adminlogin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/adminlogin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::resource('/admin', 'Admin\UserController');
  Route::resource('/admincategory', 'Admin\CategoriesController');
  Route::resource('/adminitem', 'Admin\ItemsController');
  Route::resource('/admincreate', 'Admin\CreateAdminController');
  Route::resource('/adminrequest', 'Admin\AdminManageController');
  Route::get('/adminlogout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::get('/adminpdf', 'Admin\pdfgenerateController@pdf');



/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
 
 Route::resource('/medical', 'User\HomeUserLoginController');
 Route::resource('/doctor', 'User\CreateDoctorItemConroller');
 Route::resource('/ambulance', 'User\CreateAmbulanceItemController');
 Route::resource('/blood', 'User\CreateBloodItemController');
 Route::get('/addrequest/{id}', 'User\AddRequestController@getAdd')->name('request.add');
 Route::get('/requestlist', 'User\AddRequestController@getCart')->name('request.list');
 Route::get('/removerequest/{id}', 'User\AddRequestController@getRemove')->name('remove.request');
 Route::get('/checkout', 'User\AddRequestController@getCheckout')->name('get.checkout');
 Route::get('/history', 'User\AddRequestController@gethistory')->name('get.history');
 Route::get('/userlogout', 'Auth\LoginController@userLogout')->name('user.logout');

