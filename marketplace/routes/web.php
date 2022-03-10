<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

Auth::routes();

Route::group(['namespace' => 'Auth'] , function(){
    Route::get('/companyregister', 'CompanyRegisterController@showRegistrationForm')->name('companyRegister');
    Route::post('/companyregister', 'CompanyRegisterController@register');
});

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
    Route::get('/users', 'Admin@users')->name('admin.users');
    Route::get('/companys', 'Admin@companys')->name('admin.companys');
    Route::get('/callback', 'Admin@callback')->name('admin.callback');
    Route::get('/mail', 'Admin@mail')->name('admin.mail');
});

Route::group(['namespace' => 'Roles', 'prefix' => 'company', 'middleware' => 'company'], function () {
    Route::get('/', 'Company@home')->name('company.home');
    Route::get('/products', 'Company@home')->name('company.products');
    Route::get('/orders', 'Company@home')->name('company.orders');
    Route::get('/callback', 'Company@home')->name('company.callback');
});

Route::group(['namespace' => 'Roles', 'prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('/', 'AuthUser@home')->name('user.home');
    Route::get('/orders', 'AuthUser@orders')->name('user.orders');
    Route::get('/autos', 'AuthUser@autos')->name('user.autos');
    Route::get('/houses', 'AuthUser@houses')->name('user.houses');
    Route::get('/callback', 'AuthUser@callback')->name('user.callback');
});

Route::get('/test', function (Request $request) {
    
});
