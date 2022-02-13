<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;


class ProductService
{   

    public function getProductsByType(int $typeId)
    {
        $products = Product::where('type_id', $typeId)->paginate(10);
        return $products;
    }

    public function getProductsByCategory(int $categoryId)
    {
        $category = Category::find($categoryId);
        $types = $category->types;
        foreach ($types as $type) {
            $typesId[] = $type->id;
        }
        $products = Product::whereIn('type_id', $typesId)->orderBy('id')->paginate(10);
        return $products;
    }
}
