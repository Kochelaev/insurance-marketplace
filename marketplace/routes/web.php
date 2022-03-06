<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::get('/', 'ProductController@allProductsShow');

Route::get('/category/{id}', 'ProductController@productsByCategoryShow');

Route::get('/type/{id}', 'ProductController@productsByTypeShow');

Route::get('/product/{id}', "ProductController@productInfoShow");

Route::get('/companys', 'CompanyController@allCompanysShow');

Route::get('/company/{id}', 'CompanyController@companyShow');

Route::get('/search', 'SearchController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/callbackRequest', 'MessageController@callbackRequest')->name('callbackRequest');



Route::get('/test', 'RoleController@home');

Route::get('/test1', function () {
    if (empty(Auth()->user()->role))
        return 'Goest';
    else {
        $role = Auth()->user()->role;
        if ($role == 'A') return  'Admin';
        if ($role == 'U') return  'AuthUser';
        if ($role == 'C') return  'Company';
    }
});
