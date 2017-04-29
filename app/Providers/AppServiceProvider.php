<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        // added this for initial database setup
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        // use Auth0
        $this->app->bind(
                '\Auth0\Login\Contract\Auth0UserRepository', '\Auth0\Login\Repository\Auth0UserRepository');
    }

}
