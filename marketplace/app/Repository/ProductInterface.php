<?php

namespace App\Repository;


use Illuminate\Pagination\LengthAwarePaginator;

interface ProductInterface
{
    public function search(string $query = ''): LengthAwarePaginator;
}

//TODO: добавить поиск по компаниям.