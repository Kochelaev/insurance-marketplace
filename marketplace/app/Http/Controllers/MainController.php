<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class MainController extends Controller
{
    public function allProductsShow()
    {
        $products = Product::paginate(10);       
        return view('welcome', compact('products'))
            ->with('navMenu', $this->service->getNavMenu());
    }

    public function productsByCategoryShow($categoryId)
    {
        $products = $this->service->getProductsByCategory($categoryId);
        return view('welcome', compact('products'))
            ->with('navMenu', $this->service->getNavMenu());
    }

    public function productsByTypeShow($typeId)
    {
        $products = $this->service->getProductsByType($typeId);
        return view('welcome', compact('products'))
            ->with('navMenu', $this->service->getNavMenu());
    }

    public function allCompanyShow()
    {
        $companys = User::where('company', '!=', null)->paginate();
        dd($companys);
    }
}
