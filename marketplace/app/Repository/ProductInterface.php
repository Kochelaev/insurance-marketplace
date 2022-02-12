<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;

interface ProductInterface
{
    public function search(string $query = ''):Collection;
}