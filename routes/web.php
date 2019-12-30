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


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search/data', 'HomeController@search_data')->name('search_data');

Route::post('/search_car', 'HomeController@search_car')->name('search_car');


Route::group(['middleware' => ['UserRole:manager|employee']], function() {
    Route::get('admin/dashboard', 'DashboardController@index');
    Route::get('admin/users', 'StudentController@index');
    Route::resource('admin/partners', 'PartnersController');
    Route::resource('admin/car_rent', 'CarsController');
    Route::resource('admin/order', 'OrderController');
    Route::resource('admin/contact_admin', 'ContactController');
    Route::resource('admin/position', 'PositionController');
    Route::resource('admin/type_cars', 'TypecarController');
    Route::resource('admin/review', 'ReviewController');
    Route::resource('admin/brand_cars', 'BrandController');
    Route::post('api/post_status', 'CarsController@api_post_status');
    Route::post('api/partner_status', 'PartnersController@api_post_status');
    Route::get('admin/car_rent/del/{id}', 'CarsController@del_car');
    Route::get('admin/partners/{id}/province', 'PartnersController@partner_pro');
    Route::post('admin/post_partner_pro/{id}', 'PartnersController@post_partner_pro');


    Route::post('admin/edit_position/{id}', 'PositionController@edit_position');
    Route::post('admin/del_position/{id}', 'PositionController@del_position');

    Route::post('admin/add_position/{id}', 'PositionController@add_position');
    Route::get('admin/partner_dash_pro/{id}', 'PartnersController@partner_dash_pro');
    Route::get('admin/partner_data_pro/{id}', 'PartnersController@partner_data_pro');
    Route::get('admin/partner_del_pro/{id}', 'PartnersController@partner_del_pro');

    Route::post('api/post_status_car_part', 'PartnersController@post_status_car_part');
    Route::post('admin/add_cars_part/{id}', 'PartnersController@add_cars_part');
    Route::post('admin/edit_cars_part/{id}', 'PartnersController@edit_cars_part');
    Route::post('admin/del_cars_part/{id}', 'PartnersController@del_cars_part');
    Route::post('api/post_status_review', 'ReviewController@post_status_review');

});
