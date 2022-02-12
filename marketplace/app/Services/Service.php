<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;


class Service
{
    public function getNavMenu(): array
    {
        $categorys = Category::all();
        foreach ($categorys as $category) {
            $types = $category->types;
            $result[$category->category]['id'] = $category->id;
            $result[$category->category]['types'] = array();
            foreach ($types as $type) {
                $result[$category->category]['types'][$type->id] = $type->type;
            }
        }
        return $result;
    }

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
