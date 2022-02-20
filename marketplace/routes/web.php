<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'ProductController@allProductsShow');

Route::get('/category/{id}', 'ProductController@productsByCategoryShow');

Route::get('/type/{id}', 'ProductController@productsByTypeShow');

Route::get('/product/{id}', "ProductController@productInfoShow");

Route::get('/companys', 'CompanyController@allCompanysShow');

Route::get('/company/{id}', 'CompanyController@companyShow');

Route::get('/search', 'SearchController@search');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'HomeController@index')->name('home');