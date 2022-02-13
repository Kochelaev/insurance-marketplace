<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductInterface
{
    public function search(string $query = ''): LengthAwarePaginator;
}

//TODO: добавить поиск по компаниям.