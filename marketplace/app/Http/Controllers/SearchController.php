<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(isset($_GET['query'])){
            $searchText=$_GET['query'];
            $products = Product::where('title','LIKE', '%'.$searchText.'%')->paginate(10);
            return view('search', compact('products'));
        } else{
            return view('search');
        }
        
    }
}
