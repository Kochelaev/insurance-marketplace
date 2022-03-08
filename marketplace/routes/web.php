<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Auth::routes();

Route::get('/', 'ProductController@allProductsShow')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{id}', 'ProductController@productsByCategoryShow');

Route::get('/type/{id}', 'ProductController@productsByTypeShow');

Route::get('/product/{id}', "ProductController@productInfoShow");

Route::get('/companys', 'CompanyController@allCompanysShow');

Route::get('/companys/{id}', 'CompanyController@companyShow');

Route::get('/search', 'SearchController@search');

Route::post('/callbackRequest', 'MessageController@callbackRequest')->name('callbackRequest');

Route::group(['namespace' => 'Roles', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'Admin@home')->name('admin.home');
});

Route::group(['namespace' => 'Roles', 'prefix' => 'company', 'middleware' => 'company'], function () {
    Route::get('/', 'Company@home')->name('company.home');
});

Route::group(['namespace' => 'Roles', 'prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('/', 'AuthUser@home')->name('user.home');
});

Route::get('/test', 'ProductController@productInfoShow');

Route::get('/test1', function (Request $request) {
});
