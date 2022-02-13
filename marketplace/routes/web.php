<?php


use Illuminate\Support\Facades\Route;
use App\Services\Service;
<<<<<<< HEAD
use App\Models\Product;
=======
use App\Services\ProductsSql;
use App\Int\SearchInterface;
>>>>>>> 24d7a2775c7e5653a30afaa653f9fd357b3a2ba7

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

<<<<<<< HEAD
Route::get('/search', 'SearchController@search');
=======
//Route::get('/search', 'SearchController@search')->name('web.search');

Route::get('/test', 'MainController@test');

Route::get('/search', function (ProductsSql $repository) {
    $service = new Service();
    $navMenu = $service->getNavMenu();
    
    $products = $repository->search(request('q'));

    return view('elastic', [
        'products' => $products,
    ])->with('navMenu', $navMenu);
});
>>>>>>> 24d7a2775c7e5653a30afaa653f9fd357b3a2ba7
