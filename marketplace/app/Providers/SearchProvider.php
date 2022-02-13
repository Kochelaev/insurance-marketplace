<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\SearchInterface;
use App\Services\ProductsSql;

class SearchProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       //$this->app->bind(SearchInterface::class, ProductsSql::class);
      // $this->app->bind(SearchInterface::class, ProductsSql::class);
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
