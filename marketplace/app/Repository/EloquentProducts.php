<?php

namespace App\Repository;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class EloquentProducts implements ProductInterface
{
    public function search (string $query = ''):Collection
    {
        return Product::query()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->get();
    }
}