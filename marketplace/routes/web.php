<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['namespace' => 'Auth'], function () {
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

Route::group(['namespace' => 'Roles', 'prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('/', 'AuthUser@home')->name('user.home');
    Route::name('user.profile.')->prefix('profile')->group(function () {
        Route::get('/edit', 'AuthUser@profileUpdateForm')->name('updateForm');
        Route::post('/edit', 'AuthUser@profileUpdate')->name('update');
    });
    Route::get('/orders', 'AuthUser@orders')->name('user.orders');
    Route::get('/autos', 'AuthUser@autos')->name('user.autos');
    Route::get('/houses', 'AuthUser@houses')->name('user.houses');
    Route::get('/callback', 'AuthUser@callback')->name('user.callback');
});

Route::group(['namespace' => 'Roles', 'prefix' => 'company', 'middleware' => 'company'], function () {

    Route::get('/', 'Company@home')->name('company.home');
    Route::name('company.profile.')->prefix('profile')->group(function () {
        Route::get('/edit', 'Company@profileUpdateForm')->name('updateForm');
        Route::post('/edit', 'Company@profileUpdate')->name('update');
    });

    Route::get('/products', 'Company@products')->name('company.products');
    Route::name('company.products.')->prefix('products')->group(function () {
        Route::get('/create', 'Company@productCreateSetType')->name('createSetType');
        Route::get('/create/{typeId}', 'Company@productCreateForm')->name('createForm');
        Route::post('/create', 'Company@productCreate')->name('create');
        Route::get('/edit/{id}', 'Company@productUpdateForm')->name('updateForm');
        Route::post('/edit/{id}', 'Company@productUpdate')->name('update');
        Route::post('/delete/{id}', 'Company@productDelete')->name('delete');
        Route::get('/restore', 'Company@productRestoreForm')->name('restorForm');
        Route::post('/restore/{id}', 'Company@productRestore')->name('restore');
    });

    Route::get('/orders', 'Company@orders')->name('company.orders');
    Route::get('/callback', 'Company@callback')->name('company.callback');
});

Route::group(['namespace' => 'Roles', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'Admin@home')->name('admin.home');
    Route::name('admin.profile.')->prefix('profile')->group(function () {
        Route::get('/edit', 'Admin@profileUpdateForm')->name('updateForm');
        Route::post('/edit', 'Admin@profileUpdate')->name('update');
    });
    Route::get('/users', 'Admin@users')->name('admin.users');
    Route::name('admin.users.')->prefix('users')->group(function () {        
        Route::get('/edit/{id}', 'Admin@userUpdateForm')->name('updateForm');
        Route::post('/edit/{id}', 'Admin@userUpdate')->name('update');
        Route::post('/delete/{id}', 'Admin@userDelete')->name('delete');
        Route::get('/restore', 'Admin@usersRestoreForm')->name('restorForm');
        Route::post('/restore/{id}', 'Admin@userRestore')->name('restore');    
    });
    Route::get('/companys', 'Admin@companys')->name('admin.companys');
    Route::name('admin.companys.')->prefix('companys')->group(function () {        
        Route::get('{id}/products', 'Admin@companyProducts')->name('products');
        Route::get('/edit/{id}', 'Admin@companyUpdateForm')->name('updateForm');
        Route::post('/edit/{id}', 'Admin@companyUpdate')->name('update');
        Route::post('/delete/{id}', 'Admin@companyDelete')->name('delete');
        Route::get('/restore', 'Admin@companyRestoreForm')->name('restorForm');
        Route::post('/restore/{id}', 'Admin@companyRestore')->name('restore');    
    });    
    Route::get('/products', 'Admin@products')->name('admin.products');
    Route::name('admin.products.')->prefix('products')->group(function () {        
        Route::get('/edit/{id}', 'Admin@productUpdateForm')->name('updateForm');
        Route::post('/edit/{id}', 'Admin@productUpdate')->name('update');
        Route::post('/delete/{id}', 'Admin@productDelete')->name('delete');
        Route::get('/restore', 'Admin@productRestoreForm')->name('restorForm');
        Route::post('/restore/{id}', 'Admin@productRestore')->name('restore');    
    });
    Route::get('/callback', 'Admin@callback')->name('admin.callback');
    Route::get('/mail', 'Admin@mail')->name('admin.mail');
});