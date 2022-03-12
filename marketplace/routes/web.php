<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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

Route::group(['namespace' => 'Roles', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'Admin@home')->name('admin.home');
    Route::get('/users', 'Admin@users')->name('admin.users');
    Route::get('/companys', 'Admin@companys')->name('admin.companys');
    Route::get('/callback', 'Admin@callback')->name('admin.callback');
    Route::get('/mail', 'Admin@mail')->name('admin.mail');
});



Route::group(['namespace' => 'Roles', 'prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('/', 'AuthUser@home')->name('user.home');
    Route::get('/orders', 'AuthUser@orders')->name('user.orders');
    Route::get('/autos', 'AuthUser@autos')->name('user.autos');
    Route::get('/houses', 'AuthUser@houses')->name('user.houses');
    Route::get('/callback', 'AuthUser@callback')->name('user.callback');
});

Route::get('/test', function (Request $request) {
    $product = Product::find(1);
    dd($product->category);
    dd($product->getCategory());
});

Route::group(['namespace' => 'Roles', 'prefix' => 'company', 'middleware' => 'company'], function () {

    Route::get('/', 'Company@home')->name('company.home');
    Route::get('/products', 'Company@products')->name('company.products');
    Route::name('company.profile.')->prefix('profile')->group(function () {
        Route::get('/edit', 'Company@CompanyProfileUpdateForm')->name('updateForm');
        Route::post('/edit', 'Company@CompanyProfileUpdate')->name('update');
    });

    Route::name('company.products.')->prefix('products')->group(function () {
        Route::get('/create', 'Company@productCreateForm')->name('createForm');
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
