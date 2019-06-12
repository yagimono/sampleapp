<?php

namespace App\Providers;

use App\Services\PersonService;
use Illuminate\Support\ServiceProvider;

use App\Repositories\Person\PersonRepository;
use App\Repositories\Person\QBPersonRepository;
use App\Repositories\Person\EQPersonRepository;

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
        $this->app->bind(PersonService::class, function ($app) {
            return new PersonService($app->make(PersonRepository::class));
        });

        $this->app->bind(PersonRepository::class, function () {
            return new QBPersonRepository();
            // return new EQPersonRepository();
        });
    }
}
