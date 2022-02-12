<?php

namespace App\Services;


use App\Services\Interfaces\SearchInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;


Class ProductsSql implements SearchInterface
{
    public function search(string $query = ''): Collection
    {
        return Product::query()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();
    }
}