<?php



use Elasticsearch\Client;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Redis;


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

Route::get('/test' , function (Client $client) {
    
    //Redis::set('name', 'Artem');
    return Redis::get('name');
    
});
