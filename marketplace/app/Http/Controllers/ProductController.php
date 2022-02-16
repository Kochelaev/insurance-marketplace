<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\Helper;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{   
    // TODO: bind this in serviceProvider
    public $productService;
    public $helper;

    public function __construct(ProductService $productService, Helper $helper)
    {
        $this->productService = $productService;
        $this->helper = $helper;
    }

    
    public function allProductsShow()
    {
        $products = Product::paginate(10);       
        return view('productList', compact('products'))
            ->with('navMenu', $this->helper->getNavMenu());
    }

    public function productsByCategoryShow($categoryId)
    {
        $products = $this->productService->getProductsByCategory($categoryId);
        return view('productList', compact('products'))
        ->with('navMenu', $this->helper->getNavMenu());
    }

    public function productsByTypeShow($typeId)
    {
        $products = $this->productService->getProductsByType($typeId);
        return view('productList', compact('products'))
        ->with('navMenu', $this->helper->getNavMenu());
    }

    public function productInfoShow($productId)
    {
        dd($productId);
    }

}
