<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Type;

class Helper
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

    public function getAllTypes()
    {
        return Type::all();
    }

    public function getAllCategories()
    {
        return Category::all();
    }
}
