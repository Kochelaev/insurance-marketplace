<?php

namespace App\Providers;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\Roles\Admin;
use App\Http\Controllers\Roles\AuthUser;
use App\Http\Controllers\Roles\Company;
use App\Http\Controllers\Roles\Goest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RoleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            RoleController::class,
            function ($app) {
                if (empty(Auth()->user()->role)) 
                    return new Goest;
                else {
                    $role = Auth()->user()->role;
                    if ($role === 'A') return new Admin;
                    if ($role === 'U') return new AuthUser;
                    if ($role === 'C') return new Company;
                }
            }
        );
    }
}
