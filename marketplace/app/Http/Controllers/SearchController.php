<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repository\ProductInterface;



class SearchController extends Controller
{
    public function search(ProductInterface $repository)
    {
        $navMenu = $this->service->getNavMenu();

        if (!empty(request('q')))
            $products = $repository->search(request('q'));
        else
            $products = Product::paginate(10);

        return view('productList', compact('products'))
            ->with('navMenu', $navMenu);
    }
}
