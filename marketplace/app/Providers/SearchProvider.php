<?php

namespace App\Providers;

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
