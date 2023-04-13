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

    public function getProductById($productId)
    {
        return Product::find($productId);
    }

    public function getViewsCount($productId)
    {
        $key = 'ProductViews' . $productId;
        Redis::setnx($key, 0);
        return Redis::get($key);
    }

    public function getProductsByCompanyId($companyId)
    {
        return Product::where('owner_id', $companyId)->paginate(10);
    }

    public function getTrashProductByCompanyId($companyId)
    {
        return Product::onlyTrashed()
            ->where('owner_id', $companyId)
            ->paginate(10);
    }

    public function getTrashProductOwnerId($productId)
    {
        $product = Product::onlyTrashed()
            ->find($productId);
        return $product->owner_id;
    }

    public function RestoreProductById($productId)
    {
        $product = Product::onlyTrashed()
            ->find($productId);
        $product->restore();
    }

    public function getCategoryByProduct($productId)
    {
        $product = Product::find($productId);
        return Category::find($product->type->category_id)->category;
    }

    public function getProductOwnerId($productId)
    {
        $product = Product::find($productId);
        return $product->owner_id;
    }

    public function deleteProduct($productId)
    {
        Product::find($productId)->delete();
    }

    public function deleteProductsByCompanyId($companyId)
    {
        $products = Product::where('owner_id', $companyId)->get();
        foreach ($products as $product) {
            $product->delete();
        }
    }

    public function incrementViewsCount($productId)
    {
        $key = 'ProductViews' . $productId;
        Redis::setnx($key, 0);
        return Redis::incr($key);
    }

    public function wipeAllViewsCount()
    {
        Redis::flushdb();
    }

    public function CreateNewPoroduct($productData)
    {
        if (isset($productData['coefficients'])) {
            $productData['coefficients'] = json_encode($productData['coefficients']);
        }
        if (empty($productData['owner_id'])) {
            $productData['owner_id'] = auth()->user()->id;
        }

        return Product::create($productData);
    }
}
