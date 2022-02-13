<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;


class MainController extends Controller
{
    public function allProductsShow()
    {
        $products = Product::paginate(10);       
        return view('productList', compact('products'))
            ->with('navMenu', $this->service->getNavMenu());
    }

    public function productsByCategoryShow($categoryId)
    {
        $products = $this->service->getProductsByCategory($categoryId);
        return view('productList', compact('products'))
            ->with('navMenu', $this->service->getNavMenu());
    }

    public function productsByTypeShow($typeId)
    {
        $products = $this->service->getProductsByType($typeId);
        return view('productList', compact('products'))
            ->with('navMenu', $this->service->getNavMenu());
    }

    
}
