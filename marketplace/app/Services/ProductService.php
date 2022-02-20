<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;


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
}
