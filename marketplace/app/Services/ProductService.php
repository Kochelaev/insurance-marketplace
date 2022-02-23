<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redis;


class ProductService
{

    public function getProductsByType(int $typeId)
    {
        return Product::where('type_id', $typeId)->paginate(10);
    }

    public function getProductsByCategory(int $categoryId)
    {
        return Category::find($categoryId)->products()->paginate(10);
    }

    public function getAllProducts()
    {
        return Product::paginate(10);
    }

    public function getProductById(int $productId)
    {
        return Product::find($productId);
    }

    public function getViewsCount($productId)
    {
        $key = 'ProductViews' . $productId;
        Redis::setnx($key, 0);
        return Redis::incr($key);
    }
}
