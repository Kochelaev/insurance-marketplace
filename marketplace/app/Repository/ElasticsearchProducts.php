<?php

namespace App\Repository;

use App\Models\Product;
use Elasticsearch\Client;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ElasticsearchProducts implements ProductInterface
{
    /** @var \Elasticsearch\Client */
    private $elasticsearch;

    public function __construct(Client $elasticsearch)
    {
        $this->elasticsearch = $elasticsearch;
    }

    public function search(string $query = '', int $perPage = 10, int $currentPage = 1): LengthAwarePaginator
    {
        $items = $this->searchOnElasticsearch($query);
        $products = $this->buildCollection($items);

        return new LengthAwarePaginator(
            $products,
            $products->count(),
            $perPage,
            $currentPage,
        );
    }

    private function searchOnElasticsearch(string $query = ''): array
    {
        $model = new Product;
        $items = $this->elasticsearch->search([
            'index' => $model->getSearchIndex(),
            'type' => $model->getSearchType(),
            'body' => [
                'query' => [
                    'multi_match' => [
                        'fields' => ['title^2', 'content'],
                        'query' => $query,
                    ],
                ],
            ],
        ]);
        return $items;
    }

    private function buildCollection(array $items): Collection
    {
        $ids = Arr::pluck($items['hits']['hits'], '_id');

        return Product::findMany($ids)
            ->sortBy(function ($article) use ($ids) {
                return array_search($article->getKey(), $ids);
            });
    }
}
