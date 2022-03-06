<?php

namespace App\Providers;

use App\Repository\ProductInterface;
use App\Repository\ElasticsearchProducts;
use App\Repository\EloquentProducts;
use Elasticsearch\ClientBuilder;
use Elasticsearch\Client;
use Illuminate\Support\ServiceProvider;


class SearchProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            ProductInterface::class,
            function ($app) {

                if (!config('services.search.enabled')) {
                    return new EloquentProducts;
                }

                return new ElasticsearchProducts(
                    $app->make(Client::class)
                );
            }
        );

        $this->bindSearchClient();
    }

    private function bindSearchClient()
    {
        $this->app->bind(Client::class, function ($app) {
            return ClientBuilder::create()
                ->setHosts($app['config']->get('services.search.hosts'))
                ->build();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
