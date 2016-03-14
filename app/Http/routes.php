<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'home']);
    Route::get('/vendors', ['uses' => 'VendorsController@vendorManagement', 'as' => 'vendors']);
    Route::get('/vendors/create', ['uses' => 'VendorsController@addVendor', 'as' => 'add_vendor']);
    Route::post('/vendors/create', ['uses' => 'VendorsController@storeVendor']);
    Route::get('/sales', ['uses' => 'SalesController@salesSite', 'as' => 'sales']);
    Route::get('/customers/create', ['uses' => 'SalesController@addCustomer', 'as' => 'add_customer']);
    Route::post('/customers/create', ['uses' => 'SalesController@storeCustomer']);
    Route::get('/products', ['uses' => 'ProductsController@productsSite', 'as' => 'products']);
    Route::get('/products/create', ['uses' => 'ProductsController@addProductDetails', 'as' => 'add_product']);
    Route::post('/products/create', ['uses' => 'ProductsController@storeProductDetails']);
    Route::get('/sales/create', ['uses' => 'SalesController@addSale', 'as' => 'add_sale']);
    Route::post('/sales/create', ['uses' => 'SalesController@storeSale']);
    Route::get('/products/{id}', ['uses' => 'ProductsController@productDetails', 'as' => 'product_details']);
    Route::get('/vendors/{id}', ['uses' => 'VendorsController@vendorDetails', 'as' => 'vendor_details']);
});
