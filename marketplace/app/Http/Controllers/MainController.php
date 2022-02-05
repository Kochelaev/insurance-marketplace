<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use Prophecy\Call\Call;

class MainController extends Controller
{
    public function allProductsShow()
    {
        $products = Product::paginate(10);
        return view('welcome', compact('products'));
        // $category = Category::find(1);        
        // dd($category->types());        
    }
}
