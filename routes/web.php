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

Route::auth();
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about_us', 'HomeController@about_us')->name('about_us');

Route::get('/promotion', 'HomeController@promotion')->name('promotion');

Route::get('/terms', 'HomeController@terms')->name('terms');

Route::get('/privacy', 'HomeController@privacy')->name('privacy');

Route::get('/how_to_book', 'HomeController@how_to_book')->name('how_to_book');

Route::get('/document_to_book', 'HomeController@document_to_book')->name('document_to_book');
Route::get('/insurance', 'HomeController@insurance')->name('insurance');




Route::get('/partner_register', 'HomeController@partner_register')->name('partner_register');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.get');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset.post');

Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::post('/api/add_my_contact', 'HomeController@add_my_contact')->name('add_my_contact');

Route::post('/api/add_partner_register', 'ApiController@add_partner_register')->name('add_partner_register');

Route::get('/search/data', 'HomeController@search_data')->name('search_data');


Route::get('/car_detail/{id}', 'HomeController@car_detail')->name('car_detail');

Route::post('/api/get_select2', 'HomeController@get_select2')->name('get_select2');

Route::post('/api/search_new', 'HomeController@search_new')->name('search_new');

Route::post('/search_car', 'HomeController@search_car')->name('search_car');

Route::get('/search_car', 'HomeController@search_car')->name('search_car');

Route::post('/api/add_my_order', 'ApiController@add_my_order')->name('add_my_order');
Route::post('/api/subscribe', 'ApiController@subscribe')->name('subscribe');


Route::get('/payment_success/{id}', 'HomeController@payment_success')->name('payment_success');


Route::group(['middleware' => ['UserRole:manager|employee|customer']], function() {

Route::get('/account_history', 'ProfileController@account_history')->name('account_history');
Route::post('/api/add_web_promotion', 'ProfileController@add_web_promotion')->name('add_web_promotion');


Route::get('/preferences', 'ProfileController@preferences')->name('preferences');
Route::get('/account_bookmarks', 'ProfileController@account_bookmarks')->name('account_bookmarks');

});

Route::group(['middleware' => ['UserRole:manager|employee']], function() {
    Route::get('admin/dashboard', 'DashboardController@index');
    Route::get('admin/users', 'StudentController@index');
    Route::get('admin/users/{id}', 'StudentController@show');
    Route::resource('admin/partners', 'PartnersController');

    Route::resource('admin/partners', 'PartnersController');
    Route::get('admin/partners/order/{id}', 'PartnersController@show');

    Route::resource('admin/promotion', 'PromotionController');
    Route::get('admin/promotion_del/{id}', 'PromotionController@destroy');

    Route::get('admin/promotion_add/{id}', 'PromotionController@destroy_add');


    Route::get('admin/del_contact/{id}', 'ContactController@del_contact');

    Route::resource('admin/car_rent', 'CarsController');
    Route::resource('admin/order', 'OrderController');
    Route::resource('admin/contact_admin', 'ContactController');
    Route::resource('admin/position', 'PositionController');
    Route::resource('admin/type_cars', 'TypecarController');
    Route::resource('admin/review', 'ReviewController');
    Route::resource('admin/brand_cars', 'BrandController');



    Route::post('api/order_status', 'OrderController@order_status');
    Route::get('admin/order/del/{id}', 'OrderController@order_del');

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
