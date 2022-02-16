<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\ProductInterface;
use App\Services\Helper;

class SearchController extends Controller
{
    // TODO: bind this in serviceProvider
    public function __construct(Helper $helper)
    {       
        $this->helper = $helper;
    }
    
    public function search(ProductInterface $repository)
    {
        $navMenu = $this->helper->getNavMenu();
        
        if (!empty(request('q')))
            $products = $repository->search(request('q'));
        else
            $products = Product::paginate(10);

        return view('productList', compact('products'))
            ->with('navMenu', $navMenu);
    }
}
