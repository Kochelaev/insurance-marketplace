<?php

namespace App\Providers;

use App\Repository\ProductInterface;
use App\Repository\ElasticsearchProducts;
use App\Repository\EloquentProducts;
use Elasticsearch\ClientBuilder;
use Elasticsearch\Client;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        $this->app->bind(ProductInterface::class, function ($app) {
                
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
=======
        //$this->app->bind(SearchInterface::class, EloquentProducts::class);
>>>>>>> 24d7a2775c7e5653a30afaa653f9fd357b3a2ba7
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {        
        Paginator::useBootstrap();
    }

    
}
