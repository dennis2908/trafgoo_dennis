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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'MainController@view_data')->name('main');

    Route::get('/scan', 'MainController@scan_data')->name('scan_data');
	
	Route::group([
			'prefix' => 'api',
		], function() {

			Route::group([
			'prefix' => 'item',
				], function() {

				  Route::post('get_barcode', 'ItemsController@get_barcode');
				  Route::post('add_to_chart', 'ItemsController@add_to_chart');
				  Route::post('get_tot', 'ItemsController@get_tot');
				  Route::post('insert_incr', 'ItemsController@insert_incr');
				  
			});
			Route::group([
			'prefix' => 'user',
				], function() {

				  Route::post('check_username', 'UsersController@check_username');
				  Route::post('check_email', 'UsersController@check_email');
			});

	
	});
	
});

Route::group([
			'prefix' => 'item',
				], function() {

				  Route::get('shopping_chart', 'ItemsController@shopping_chart')->name('shopping_chart');
				  Route::post('add_to_chart', 'ItemsController@add_to_chart');
});
Route::group([
			'prefix' => 'item','middleware' => ['auth:customer']
				], function() {
				  Route::get('payment', 'ItemsController@payment')->name('my_payment');
});

Route::group([
        'prefix' => 'trans',
    ], function() {
		Route::get('show_trans/{id}', 'TransactionController@show_trans');
		Route::get('remove/{id}', 'TransactionController@remove');
});

Route::group([
        'prefix' => 'trans','middleware' => ['auth:customer']
    ], function() {
		Route::get('exportTransPDF/{id}', 'TransactionController@exportTransPDF')->name('exportTransPDF');
		Route::post('insert', 'TransactionController@insert_data')->name('trans_insert_data');
		Route::get('exit_trans/{code}', 'TransactionController@exit_trans')->name('exit_trans');
		Route::get('scan_trans', 'TransactionController@scan_trans')->name('scan_trans');
});

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback')->name('social_log');
Route::prefix('customer')->group(function() {
    Route::get('/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'Auth\CustomerLoginController@login')->name('customer.login.submit');
    Route::get('/home', 'CustomerController@index')->name('customer.home');
	Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('customer.password.reset');
	Route::post('/logout', 'Auth\CustomerLoginController@logout')->name('customer.logout');
});
Route::get('customer/register','Auth\CustomerLoginController@showRegisterPage');
Route::post('customer/register', 'Auth\CustomerLoginController@register')->name('customer.register');

Route::group([
        'prefix' => 'admin','middleware' => ['web','auth']
    ], function() {

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('login.submit');
	
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('/password/reset','Auth\AdminResetPasswordController@reset');

Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('password.reset');
Route::get('/', 'Admin\AdminController@index');

});

Route::group([
        'prefix' => 'admin','middleware' => ['web']
    ], function() {

Auth::routes();
});
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {
   Route::get('/', ['uses' => 'AdminController@index']);
});
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::resource('admin/employee', 'Employee\\EmployeeController');
Route::resource('product', 'product\\productController');
Route::resource('itemBatchUpload', 'itemBatchUploadController');

Route::post('itemBatchUpload','itemBatchUploadController@importData');
Route::resource('admin/company', 'Admin\\CompanyController');

Route::get('businessLogin','UserBusinessController@login')->name('businessLogin');

Route::post('logintobusiness','UserBusinessController@logintobusiness')->name('logintobusiness');

Route::get('businesshome','UserBusinessController@home');

Route::post('businesslogout','UserBusinessController@businesslogout')->name('businesslogout');

Route::group(['prefix' => 'theAdmin'], function () {
   Route::get('/', ['uses' => 'TheadminController@theAdminLogin'])->name('theAdmin.login');
   Route::post('/submitlogin', ['uses' => 'TheadminController@theAdminSubmitlogin'])->name('theAdmin.submitlogin');
   Route::get('/home', ['uses' => 'TheadminController@theAdminHome'])->name('theAdmin.home');
   Route::get('/barchart', ['uses' => 'TheadminController@theAdminBarchart'])->name('theAdmin.barchart');
   Route::get('/register', ['uses' => 'TheadminController@theAdminRegister'])->name('theAdmin.register');
   Route::get('/reset-pass', ['uses' => 'TheadminController@theAdminResetPass'])->name('theAdmin.reset-pass');
   Route::get('/pricing', ['uses' => 'TheadminController@theAdminPricing'])->name('theAdmin.pricing');
   Route::post('/logout', ['uses' => 'TheadminController@theAdminLogout'])->name('theAdmin.logout');
});

*/
Route::group(['middleware' => ['web']], function () {
Route::get('/','HomeController@index')->name('index');
Route::get('lang/{locale}', 'HomeController@lang');	
Route::get('aboutus','HomeController@aboutus')->name('aboutus');
Route::get('services','HomeController@services')->name('services');
Route::get('portfolio','HomeController@portfolio')->name('portfolio');
Route::get('contactus','HomeController@contactus')->name('contactus');
Route::post('submit_customer_just_say','CustomerJustSayController@submit_customer_just_say')->name('submit_customer_just_say');
Route::post('submit_customer_talk_project','CustomerTalkProjectController@submit_customer_talk_project')->name('submit_customer_talk_project');
});