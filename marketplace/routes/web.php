<?php


use Illuminate\Support\Facades\Route;
use App\Services\Service;

use App\Models\Product;
use App\Repository\ProductInterface;

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

Route::get('/', 'MainController@allProductsShow');

Route::get('/category/{id}', 'MainController@productsByCategoryShow');

Route::get('/type/{id}', 'MainController@productsByTypeShow');

Route::get('/companys', 'MainController@allCompanyShow');

Route::get('/company/{id}', 'MainController@allCompanyShow');

Route::get('/search', 'SearchController@search');

//Route::get('/search', 'SearchController@search')->name('web.search');

Route::get('/test', 'MainController@test');

