<?php

namespace App\Providers;

use App\Services\PersonService;
use Illuminate\Support\ServiceProvider;

use App\Repositories\PersonRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PersonService::class, function () {
            return new PersonService();
        });

        $this->app->bind(PersonRepository::class, function () {
            return new PersonRepository();
        });
    }
}
