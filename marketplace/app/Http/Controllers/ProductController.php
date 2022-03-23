<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\Helper;

class ProductController extends Controller
{    
    public $productService;
    public $helper;

    public function __construct(ProductService $productService, Helper $helper)
    {
        $this->productService = $productService;
        $this->helper = $helper;
    }


    public function allProductsShow()
    {
        $products = $this->productService->getAllProducts();
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
        //возможно можно реализовать красивее через middleware
        $product = $this->productService->getProductById($productId);
        $this->productService->incrementViewsCount($productId);
        if (Auth()->user()) $view = 'user.productShow';
        else $view = 'productShow';
        
        return view($view, compact('product'))
            ->with('navMenu', $this->helper->getNavMenu())
            ->with('viewsCount', $this->productService->getViewsCount($productId));
    }
}
