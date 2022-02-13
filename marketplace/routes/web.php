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

//Route::get('/search', 'SearchController@search')->name('web.search');

Route::get('/test', 'MainController@test');

Route::get('/search', function (ProductInterface $repository) {
    $service = new Service();
    $navMenu = $service->getNavMenu();

    if (!empty(request('q')))
        $products = $repository->search(request('q'));
    else $products = $repository::all();

    return view('elastic', ['products' => $products,])
        ->with('navMenu', $navMenu);
});

Route::get('/create', function () {
    $product = new Product;
    $product->title = 'Заголовок страхового продукта';
    $product->content = 'тут контет страхвого продукта';
    $product->description = 'это дескрипшн';
    $product->owner_id = 2;
    $product->type_id = 2;
    $product->coefficients = 'gsdg sdgsd';
    
    $product->save();
});
